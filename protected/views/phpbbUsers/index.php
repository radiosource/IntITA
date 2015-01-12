<?php
/* @var $this PhpbbUsersController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Phpbb Users',
);

$this->menu=array(
	array('label'=>'Create PhpbbUsers', 'url'=>array('create')),
	array('label'=>'Manage PhpbbUsers', 'url'=>array('admin')),
);
?>

<h1>Phpbb Users</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
