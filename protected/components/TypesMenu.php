<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 08.01.15
 * Time: 19:54
 */

class TypesMenu extends CWidget {
    public function run(){
        $types = Types::model()->findAll();
        $this->render('typesMenu', array('types'=>$types));
    }


} 