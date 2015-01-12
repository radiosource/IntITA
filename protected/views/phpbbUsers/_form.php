<?php
/* @var $this PhpbbUsersController */
/* @var $model PhpbbUsers */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'phpbb-users-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'user_type'); ?>
		<?php echo $form->textField($model,'user_type'); ?>
		<?php echo $form->error($model,'user_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'group_id'); ?>
		<?php echo $form->textField($model,'group_id'); ?>
		<?php echo $form->error($model,'group_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_permissions'); ?>
		<?php echo $form->textArea($model,'user_permissions',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'user_permissions'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_perm_from'); ?>
		<?php echo $form->textField($model,'user_perm_from'); ?>
		<?php echo $form->error($model,'user_perm_from'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_ip'); ?>
		<?php echo $form->textField($model,'user_ip',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'user_ip'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_regdate'); ?>
		<?php echo $form->textField($model,'user_regdate',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'user_regdate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'username_clean'); ?>
		<?php echo $form->textField($model,'username_clean',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'username_clean'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_password'); ?>
		<?php echo $form->textField($model,'user_password',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'user_password'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_passchg'); ?>
		<?php echo $form->textField($model,'user_passchg',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'user_passchg'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_email'); ?>
		<?php echo $form->textField($model,'user_email',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'user_email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_email_hash'); ?>
		<?php echo $form->textField($model,'user_email_hash',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'user_email_hash'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_birthday'); ?>
		<?php echo $form->textField($model,'user_birthday',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'user_birthday'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_lastvisit'); ?>
		<?php echo $form->textField($model,'user_lastvisit',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'user_lastvisit'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_lastmark'); ?>
		<?php echo $form->textField($model,'user_lastmark',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'user_lastmark'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_lastpost_time'); ?>
		<?php echo $form->textField($model,'user_lastpost_time',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'user_lastpost_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_lastpage'); ?>
		<?php echo $form->textField($model,'user_lastpage',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'user_lastpage'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_last_confirm_key'); ?>
		<?php echo $form->textField($model,'user_last_confirm_key',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'user_last_confirm_key'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_last_search'); ?>
		<?php echo $form->textField($model,'user_last_search',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'user_last_search'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_warnings'); ?>
		<?php echo $form->textField($model,'user_warnings'); ?>
		<?php echo $form->error($model,'user_warnings'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_last_warning'); ?>
		<?php echo $form->textField($model,'user_last_warning',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'user_last_warning'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_login_attempts'); ?>
		<?php echo $form->textField($model,'user_login_attempts'); ?>
		<?php echo $form->error($model,'user_login_attempts'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_inactive_reason'); ?>
		<?php echo $form->textField($model,'user_inactive_reason'); ?>
		<?php echo $form->error($model,'user_inactive_reason'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_inactive_time'); ?>
		<?php echo $form->textField($model,'user_inactive_time',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'user_inactive_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_posts'); ?>
		<?php echo $form->textField($model,'user_posts'); ?>
		<?php echo $form->error($model,'user_posts'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_lang'); ?>
		<?php echo $form->textField($model,'user_lang',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'user_lang'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_timezone'); ?>
		<?php echo $form->textField($model,'user_timezone',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'user_timezone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_dateformat'); ?>
		<?php echo $form->textField($model,'user_dateformat',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'user_dateformat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_style'); ?>
		<?php echo $form->textField($model,'user_style'); ?>
		<?php echo $form->error($model,'user_style'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_rank'); ?>
		<?php echo $form->textField($model,'user_rank'); ?>
		<?php echo $form->error($model,'user_rank'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_colour'); ?>
		<?php echo $form->textField($model,'user_colour',array('size'=>6,'maxlength'=>6)); ?>
		<?php echo $form->error($model,'user_colour'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_new_privmsg'); ?>
		<?php echo $form->textField($model,'user_new_privmsg'); ?>
		<?php echo $form->error($model,'user_new_privmsg'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_unread_privmsg'); ?>
		<?php echo $form->textField($model,'user_unread_privmsg'); ?>
		<?php echo $form->error($model,'user_unread_privmsg'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_last_privmsg'); ?>
		<?php echo $form->textField($model,'user_last_privmsg',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'user_last_privmsg'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_message_rules'); ?>
		<?php echo $form->textField($model,'user_message_rules'); ?>
		<?php echo $form->error($model,'user_message_rules'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_full_folder'); ?>
		<?php echo $form->textField($model,'user_full_folder'); ?>
		<?php echo $form->error($model,'user_full_folder'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_emailtime'); ?>
		<?php echo $form->textField($model,'user_emailtime',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'user_emailtime'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_topic_show_days'); ?>
		<?php echo $form->textField($model,'user_topic_show_days'); ?>
		<?php echo $form->error($model,'user_topic_show_days'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_topic_sortby_type'); ?>
		<?php echo $form->textField($model,'user_topic_sortby_type',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'user_topic_sortby_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_topic_sortby_dir'); ?>
		<?php echo $form->textField($model,'user_topic_sortby_dir',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'user_topic_sortby_dir'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_post_show_days'); ?>
		<?php echo $form->textField($model,'user_post_show_days'); ?>
		<?php echo $form->error($model,'user_post_show_days'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_post_sortby_type'); ?>
		<?php echo $form->textField($model,'user_post_sortby_type',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'user_post_sortby_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_post_sortby_dir'); ?>
		<?php echo $form->textField($model,'user_post_sortby_dir',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'user_post_sortby_dir'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_notify'); ?>
		<?php echo $form->textField($model,'user_notify'); ?>
		<?php echo $form->error($model,'user_notify'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_notify_pm'); ?>
		<?php echo $form->textField($model,'user_notify_pm'); ?>
		<?php echo $form->error($model,'user_notify_pm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_notify_type'); ?>
		<?php echo $form->textField($model,'user_notify_type'); ?>
		<?php echo $form->error($model,'user_notify_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_allow_pm'); ?>
		<?php echo $form->textField($model,'user_allow_pm'); ?>
		<?php echo $form->error($model,'user_allow_pm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_allow_viewonline'); ?>
		<?php echo $form->textField($model,'user_allow_viewonline'); ?>
		<?php echo $form->error($model,'user_allow_viewonline'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_allow_viewemail'); ?>
		<?php echo $form->textField($model,'user_allow_viewemail'); ?>
		<?php echo $form->error($model,'user_allow_viewemail'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_allow_massemail'); ?>
		<?php echo $form->textField($model,'user_allow_massemail'); ?>
		<?php echo $form->error($model,'user_allow_massemail'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_options'); ?>
		<?php echo $form->textField($model,'user_options',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'user_options'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_avatar'); ?>
		<?php echo $form->textField($model,'user_avatar',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'user_avatar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_avatar_type'); ?>
		<?php echo $form->textField($model,'user_avatar_type',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'user_avatar_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_avatar_width'); ?>
		<?php echo $form->textField($model,'user_avatar_width'); ?>
		<?php echo $form->error($model,'user_avatar_width'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_avatar_height'); ?>
		<?php echo $form->textField($model,'user_avatar_height'); ?>
		<?php echo $form->error($model,'user_avatar_height'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_sig'); ?>
		<?php echo $form->textArea($model,'user_sig',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'user_sig'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_sig_bbcode_uid'); ?>
		<?php echo $form->textField($model,'user_sig_bbcode_uid',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'user_sig_bbcode_uid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_sig_bbcode_bitfield'); ?>
		<?php echo $form->textField($model,'user_sig_bbcode_bitfield',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'user_sig_bbcode_bitfield'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_jabber'); ?>
		<?php echo $form->textField($model,'user_jabber',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'user_jabber'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_actkey'); ?>
		<?php echo $form->textField($model,'user_actkey',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'user_actkey'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_newpasswd'); ?>
		<?php echo $form->textField($model,'user_newpasswd',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'user_newpasswd'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_form_salt'); ?>
		<?php echo $form->textField($model,'user_form_salt',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'user_form_salt'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_new'); ?>
		<?php echo $form->textField($model,'user_new'); ?>
		<?php echo $form->error($model,'user_new'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_reminded'); ?>
		<?php echo $form->textField($model,'user_reminded'); ?>
		<?php echo $form->error($model,'user_reminded'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_reminded_time'); ?>
		<?php echo $form->textField($model,'user_reminded_time',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'user_reminded_time'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->