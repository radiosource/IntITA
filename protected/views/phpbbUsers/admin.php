<?php
/* @var $this PhpbbUsersController */
/* @var $model PhpbbUsers */

$this->breadcrumbs=array(
	'Phpbb Users'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List PhpbbUsers', 'url'=>array('index')),
	array('label'=>'Create PhpbbUsers', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#phpbb-users-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Phpbb Users</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'phpbb-users-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'user_id',
		'user_type',
		'group_id',
		'user_permissions',
		'user_perm_from',
		'user_ip',
		/*
		'user_regdate',
		'username',
		'username_clean',
		'user_password',
		'user_passchg',
		'user_email',
		'user_email_hash',
		'user_birthday',
		'user_lastvisit',
		'user_lastmark',
		'user_lastpost_time',
		'user_lastpage',
		'user_last_confirm_key',
		'user_last_search',
		'user_warnings',
		'user_last_warning',
		'user_login_attempts',
		'user_inactive_reason',
		'user_inactive_time',
		'user_posts',
		'user_lang',
		'user_timezone',
		'user_dateformat',
		'user_style',
		'user_rank',
		'user_colour',
		'user_new_privmsg',
		'user_unread_privmsg',
		'user_last_privmsg',
		'user_message_rules',
		'user_full_folder',
		'user_emailtime',
		'user_topic_show_days',
		'user_topic_sortby_type',
		'user_topic_sortby_dir',
		'user_post_show_days',
		'user_post_sortby_type',
		'user_post_sortby_dir',
		'user_notify',
		'user_notify_pm',
		'user_notify_type',
		'user_allow_pm',
		'user_allow_viewonline',
		'user_allow_viewemail',
		'user_allow_massemail',
		'user_options',
		'user_avatar',
		'user_avatar_type',
		'user_avatar_width',
		'user_avatar_height',
		'user_sig',
		'user_sig_bbcode_uid',
		'user_sig_bbcode_bitfield',
		'user_jabber',
		'user_actkey',
		'user_newpasswd',
		'user_form_salt',
		'user_new',
		'user_reminded',
		'user_reminded_time',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
