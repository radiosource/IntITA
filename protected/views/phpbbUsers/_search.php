<?php
/* @var $this PhpbbUsersController */
/* @var $model PhpbbUsers */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_type'); ?>
		<?php echo $form->textField($model,'user_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'group_id'); ?>
		<?php echo $form->textField($model,'group_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_permissions'); ?>
		<?php echo $form->textArea($model,'user_permissions',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_perm_from'); ?>
		<?php echo $form->textField($model,'user_perm_from'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_ip'); ?>
		<?php echo $form->textField($model,'user_ip',array('size'=>40,'maxlength'=>40)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_regdate'); ?>
		<?php echo $form->textField($model,'user_regdate',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'username_clean'); ?>
		<?php echo $form->textField($model,'username_clean',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_passchg'); ?>
		<?php echo $form->textField($model,'user_passchg',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_email'); ?>
		<?php echo $form->textField($model,'user_email',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_email_hash'); ?>
		<?php echo $form->textField($model,'user_email_hash',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_birthday'); ?>
		<?php echo $form->textField($model,'user_birthday',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_lastvisit'); ?>
		<?php echo $form->textField($model,'user_lastvisit',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_lastmark'); ?>
		<?php echo $form->textField($model,'user_lastmark',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_lastpost_time'); ?>
		<?php echo $form->textField($model,'user_lastpost_time',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_lastpage'); ?>
		<?php echo $form->textField($model,'user_lastpage',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_last_confirm_key'); ?>
		<?php echo $form->textField($model,'user_last_confirm_key',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_last_search'); ?>
		<?php echo $form->textField($model,'user_last_search',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_warnings'); ?>
		<?php echo $form->textField($model,'user_warnings'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_last_warning'); ?>
		<?php echo $form->textField($model,'user_last_warning',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_login_attempts'); ?>
		<?php echo $form->textField($model,'user_login_attempts'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_inactive_reason'); ?>
		<?php echo $form->textField($model,'user_inactive_reason'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_inactive_time'); ?>
		<?php echo $form->textField($model,'user_inactive_time',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_posts'); ?>
		<?php echo $form->textField($model,'user_posts'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_lang'); ?>
		<?php echo $form->textField($model,'user_lang',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_timezone'); ?>
		<?php echo $form->textField($model,'user_timezone',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_dateformat'); ?>
		<?php echo $form->textField($model,'user_dateformat',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_style'); ?>
		<?php echo $form->textField($model,'user_style'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_rank'); ?>
		<?php echo $form->textField($model,'user_rank'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_colour'); ?>
		<?php echo $form->textField($model,'user_colour',array('size'=>6,'maxlength'=>6)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_new_privmsg'); ?>
		<?php echo $form->textField($model,'user_new_privmsg'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_unread_privmsg'); ?>
		<?php echo $form->textField($model,'user_unread_privmsg'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_last_privmsg'); ?>
		<?php echo $form->textField($model,'user_last_privmsg',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_message_rules'); ?>
		<?php echo $form->textField($model,'user_message_rules'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_full_folder'); ?>
		<?php echo $form->textField($model,'user_full_folder'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_emailtime'); ?>
		<?php echo $form->textField($model,'user_emailtime',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_topic_show_days'); ?>
		<?php echo $form->textField($model,'user_topic_show_days'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_topic_sortby_type'); ?>
		<?php echo $form->textField($model,'user_topic_sortby_type',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_topic_sortby_dir'); ?>
		<?php echo $form->textField($model,'user_topic_sortby_dir',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_post_show_days'); ?>
		<?php echo $form->textField($model,'user_post_show_days'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_post_sortby_type'); ?>
		<?php echo $form->textField($model,'user_post_sortby_type',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_post_sortby_dir'); ?>
		<?php echo $form->textField($model,'user_post_sortby_dir',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_notify'); ?>
		<?php echo $form->textField($model,'user_notify'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_notify_pm'); ?>
		<?php echo $form->textField($model,'user_notify_pm'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_notify_type'); ?>
		<?php echo $form->textField($model,'user_notify_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_allow_pm'); ?>
		<?php echo $form->textField($model,'user_allow_pm'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_allow_viewonline'); ?>
		<?php echo $form->textField($model,'user_allow_viewonline'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_allow_viewemail'); ?>
		<?php echo $form->textField($model,'user_allow_viewemail'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_allow_massemail'); ?>
		<?php echo $form->textField($model,'user_allow_massemail'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_options'); ?>
		<?php echo $form->textField($model,'user_options',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_avatar'); ?>
		<?php echo $form->textField($model,'user_avatar',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_avatar_type'); ?>
		<?php echo $form->textField($model,'user_avatar_type',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_avatar_width'); ?>
		<?php echo $form->textField($model,'user_avatar_width'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_avatar_height'); ?>
		<?php echo $form->textField($model,'user_avatar_height'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_sig'); ?>
		<?php echo $form->textArea($model,'user_sig',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_sig_bbcode_uid'); ?>
		<?php echo $form->textField($model,'user_sig_bbcode_uid',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_sig_bbcode_bitfield'); ?>
		<?php echo $form->textField($model,'user_sig_bbcode_bitfield',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_jabber'); ?>
		<?php echo $form->textField($model,'user_jabber',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_actkey'); ?>
		<?php echo $form->textField($model,'user_actkey',array('size'=>32,'maxlength'=>32)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_newpasswd'); ?>
		<?php echo $form->textField($model,'user_newpasswd',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_form_salt'); ?>
		<?php echo $form->textField($model,'user_form_salt',array('size'=>32,'maxlength'=>32)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_new'); ?>
		<?php echo $form->textField($model,'user_new'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_reminded'); ?>
		<?php echo $form->textField($model,'user_reminded'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_reminded_time'); ?>
		<?php echo $form->textField($model,'user_reminded_time',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->