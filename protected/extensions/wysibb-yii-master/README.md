WysiBB Widget
==========

WysiBB Widget is a wrapper for [Wysibb](http://www.wysibb.com/) wysiwyg bbcode editor.

##Installation
1. Download extension.
2. Unzip the extension in "extension" folder of your project.
3. Insert the widget at the right position on the page using the following code: 
```php

$this->widget('ext.wysibb-yii.WysiBBWidget',
    array(
        'model'=>$yourModel,
        'attribute'=>'attribute_name',
        // or 'name'=>'selector_name' if model and attribute is missing.
    )
);

```
4. Use.

##Configuration
###Selector (Str)
Selector name. If need to connect to the existing elements on the page.
###Options(Arr)
Jquery plugin options. See http://www.wysibb.com/docs/p8

> Plugin language is displayed depending on the Yii::app()->language.

P.S.: Sorry for bad English ;)
