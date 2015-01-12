<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<div id="container" style="float: left">
    <form action="" method="" id="form">
        <input type="button" value="C" id="C_Code">
        <input type="button" value="JS" id="JS_Code"><br />
        <textarea cols="60" rows="30" placeholder="Input your code here" id="code"></textarea><br />
    </form>
</div>
<div style="float: right; margin-top: 20px;">
    <textarea cols="60" rows="30" placeholder="Results" id="response"></textarea><br />
</div>
