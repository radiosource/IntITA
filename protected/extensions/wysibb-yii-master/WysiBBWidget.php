<?php
/**
 * WysiBBWidget class file.
 *
 * @author Vadim Dobroskok <http://www.wysibb.com>
 * @author Dmitriy Brusenskiy <brussens@hoswac.com>
 *
 * @version 1.1.0.1
 *
 * @link https://github.com/brussens/wysibb-yii
 * @link http://www.wysibb.com
 * @license https://github.com/brussens/wysibb-yii/blob/master/LICENSE
 */
class WysiBBWidget extends CInputWidget {

    /**
     * Assets package ID.
     */
	const PACKAGE_ID = 'wysibb';

    /**
     * @var string|null Selector pointing to textarea to initialize redactor for.
     * Defaults to null meaning that textarea does not exist yet and will be
     * rendered by this widget.
     */
    public $selector;

    /**
     * options of js plugin
     * @var array {@link http://www.wysibb.com/docs/p8}.
     */
    public $options=array();

    /**
     * @var array
     */
    public $package = array();

    /**
     * theme path variable
     * @var bool
     */
    private $_theme=false;

    /**
     * Init widget.
     */
    public function init()
	{
		parent::init();

        if($this->selector === null) {
            list($this->name, $this->id) = $this->resolveNameID();
            $this->htmlOptions['id'] = $this->getId();
            $this->selector = '#' . $this->getId();
            if ($this->hasModel()) {
                echo CHtml::activeTextArea($this->model, $this->attribute, $this->htmlOptions);
            } else {
                echo CHtml::textArea($this->name, $this->value, $this->htmlOptions);
            }
        }

		$this->registerClientScript();
	}

    /**
     * Register CSS and Script.
     */
    protected function registerClientScript()
	{

        // Prepare script package.
        $this->package = array_merge(array(
            'baseUrl' => $this->getAssetsUrl(),
            'js' => array(
                'js/'.(YII_DEBUG ? 'jquery.wysibb.js' : 'jquery.wysibb.min.js'),
                (Yii::app()->language === 'en'  ? '' : 'js/lang/'.Yii::app()->language.'.js'),
            ),
            'css' => array(
                $this->getTheme()
            ),
            'depends' => array(
                'jquery',
            ),
        ), $this->package);

        $clientScript = Yii::app()->getClientScript();
        $selector = CJavaScript::encode($this->selector);
        $options = CJavaScript::encode($this->options);

        $clientScript
            ->addPackage(self::PACKAGE_ID, $this->package)
            ->registerPackage(self::PACKAGE_ID)
            ->registerScript(
                $this->id,
                'jQuery(' . $selector . ').wysibb(' . $options . ');',
                CClientScript::POS_READY
            );
	}

    /**
     * Get the assets path.
     * @return string
     */
    public function getAssetsPath()
    {
        return  dirname(__FILE__) . '/assets';
    }

    /**
     * Publish assets and return url.
     * @return string
     */
    public function getAssetsUrl()
    {
        return Yii::app()->getAssetManager()->publish($this->getAssetsPath());
    }

    /**
     * set Theme path
     * @param string $theme
     */
    public function setTheme($theme='default') {

        $this->_theme='themes/'.$theme.'/wbbtheme.css';
    }

    /**
     * get Theme path
     * @return bool
     */
    public function getTheme() {
        if(!$this->_theme)
            $this->setTheme();

        return $this->_theme;
    }
}