<?php
/* @var $this PhpbbUsersController */
/* @var $model PhpbbUsers */

$this->breadcrumbs=array(
	'Phpbb Users'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PhpbbUsers', 'url'=>array('index')),
	array('label'=>'Manage PhpbbUsers', 'url'=>array('admin')),
);
?>

<h1>Create PhpbbUsers</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>