WysiBB Widget
==========

WysiBB Widget это обёртка для [Wysibb](http://www.wysibb.com/) wysiwyg bbcode редактора.

##Установка
1. Скачать расширение.
2. Распаковать расширение в папку "extension" вашего проекта.
3. Для вставки виджета используйте следующий код в нужном месте страницы: 
```php

$this->widget('ext.wysibb-yii.WysiBBWidget',
    array(
        'model'=>$yourModel,
        'attribute'=>'attribute_name',
        // или 'name'=>'selector_name' если model и attribute отсутствуют.
    )
);

```
4. Пользуйтесь.

##Настройки
###Selector (Str)
Имя селектора. Если нужно подцепить плагин к сущестующему селектору на странице.
###Options(Arr)
Опции Jquery плагина. См. http://www.wysibb.com/docs/p8

> Язык плагина отображается в зависимости от Yii::app()->language.
