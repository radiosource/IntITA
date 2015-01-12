<?php
/* @var $this PhpbbUsersController */
/* @var $model PhpbbUsers */

$this->breadcrumbs=array(
	'Phpbb Users'=>array('index'),
	$model->user_id=>array('view','id'=>$model->user_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List PhpbbUsers', 'url'=>array('index')),
	array('label'=>'Create PhpbbUsers', 'url'=>array('create')),
	array('label'=>'View PhpbbUsers', 'url'=>array('view', 'id'=>$model->user_id)),
	array('label'=>'Manage PhpbbUsers', 'url'=>array('admin')),
);
?>

<h1>Update PhpbbUsers <?php echo $model->user_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>