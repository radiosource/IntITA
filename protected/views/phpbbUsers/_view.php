<?php
/* @var $this PhpbbUsersController */
/* @var $data PhpbbUsers */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->user_id), array('view', 'id'=>$data->user_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_type')); ?>:</b>
	<?php echo CHtml::encode($data->user_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('group_id')); ?>:</b>
	<?php echo CHtml::encode($data->group_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_permissions')); ?>:</b>
	<?php echo CHtml::encode($data->user_permissions); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_perm_from')); ?>:</b>
	<?php echo CHtml::encode($data->user_perm_from); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_ip')); ?>:</b>
	<?php echo CHtml::encode($data->user_ip); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_regdate')); ?>:</b>
	<?php echo CHtml::encode($data->user_regdate); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('username')); ?>:</b>
	<?php echo CHtml::encode($data->username); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('username_clean')); ?>:</b>
	<?php echo CHtml::encode($data->username_clean); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_password')); ?>:</b>
	<?php echo CHtml::encode($data->user_password); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_passchg')); ?>:</b>
	<?php echo CHtml::encode($data->user_passchg); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_email')); ?>:</b>
	<?php echo CHtml::encode($data->user_email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_email_hash')); ?>:</b>
	<?php echo CHtml::encode($data->user_email_hash); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_birthday')); ?>:</b>
	<?php echo CHtml::encode($data->user_birthday); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_lastvisit')); ?>:</b>
	<?php echo CHtml::encode($data->user_lastvisit); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_lastmark')); ?>:</b>
	<?php echo CHtml::encode($data->user_lastmark); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_lastpost_time')); ?>:</b>
	<?php echo CHtml::encode($data->user_lastpost_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_lastpage')); ?>:</b>
	<?php echo CHtml::encode($data->user_lastpage); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_last_confirm_key')); ?>:</b>
	<?php echo CHtml::encode($data->user_last_confirm_key); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_last_search')); ?>:</b>
	<?php echo CHtml::encode($data->user_last_search); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_warnings')); ?>:</b>
	<?php echo CHtml::encode($data->user_warnings); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_last_warning')); ?>:</b>
	<?php echo CHtml::encode($data->user_last_warning); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_login_attempts')); ?>:</b>
	<?php echo CHtml::encode($data->user_login_attempts); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_inactive_reason')); ?>:</b>
	<?php echo CHtml::encode($data->user_inactive_reason); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_inactive_time')); ?>:</b>
	<?php echo CHtml::encode($data->user_inactive_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_posts')); ?>:</b>
	<?php echo CHtml::encode($data->user_posts); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_lang')); ?>:</b>
	<?php echo CHtml::encode($data->user_lang); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_timezone')); ?>:</b>
	<?php echo CHtml::encode($data->user_timezone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_dateformat')); ?>:</b>
	<?php echo CHtml::encode($data->user_dateformat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_style')); ?>:</b>
	<?php echo CHtml::encode($data->user_style); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_rank')); ?>:</b>
	<?php echo CHtml::encode($data->user_rank); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_colour')); ?>:</b>
	<?php echo CHtml::encode($data->user_colour); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_new_privmsg')); ?>:</b>
	<?php echo CHtml::encode($data->user_new_privmsg); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_unread_privmsg')); ?>:</b>
	<?php echo CHtml::encode($data->user_unread_privmsg); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_last_privmsg')); ?>:</b>
	<?php echo CHtml::encode($data->user_last_privmsg); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_message_rules')); ?>:</b>
	<?php echo CHtml::encode($data->user_message_rules); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_full_folder')); ?>:</b>
	<?php echo CHtml::encode($data->user_full_folder); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_emailtime')); ?>:</b>
	<?php echo CHtml::encode($data->user_emailtime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_topic_show_days')); ?>:</b>
	<?php echo CHtml::encode($data->user_topic_show_days); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_topic_sortby_type')); ?>:</b>
	<?php echo CHtml::encode($data->user_topic_sortby_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_topic_sortby_dir')); ?>:</b>
	<?php echo CHtml::encode($data->user_topic_sortby_dir); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_post_show_days')); ?>:</b>
	<?php echo CHtml::encode($data->user_post_show_days); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_post_sortby_type')); ?>:</b>
	<?php echo CHtml::encode($data->user_post_sortby_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_post_sortby_dir')); ?>:</b>
	<?php echo CHtml::encode($data->user_post_sortby_dir); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_notify')); ?>:</b>
	<?php echo CHtml::encode($data->user_notify); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_notify_pm')); ?>:</b>
	<?php echo CHtml::encode($data->user_notify_pm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_notify_type')); ?>:</b>
	<?php echo CHtml::encode($data->user_notify_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_allow_pm')); ?>:</b>
	<?php echo CHtml::encode($data->user_allow_pm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_allow_viewonline')); ?>:</b>
	<?php echo CHtml::encode($data->user_allow_viewonline); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_allow_viewemail')); ?>:</b>
	<?php echo CHtml::encode($data->user_allow_viewemail); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_allow_massemail')); ?>:</b>
	<?php echo CHtml::encode($data->user_allow_massemail); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_options')); ?>:</b>
	<?php echo CHtml::encode($data->user_options); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_avatar')); ?>:</b>
	<?php echo CHtml::encode($data->user_avatar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_avatar_type')); ?>:</b>
	<?php echo CHtml::encode($data->user_avatar_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_avatar_width')); ?>:</b>
	<?php echo CHtml::encode($data->user_avatar_width); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_avatar_height')); ?>:</b>
	<?php echo CHtml::encode($data->user_avatar_height); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_sig')); ?>:</b>
	<?php echo CHtml::encode($data->user_sig); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_sig_bbcode_uid')); ?>:</b>
	<?php echo CHtml::encode($data->user_sig_bbcode_uid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_sig_bbcode_bitfield')); ?>:</b>
	<?php echo CHtml::encode($data->user_sig_bbcode_bitfield); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_jabber')); ?>:</b>
	<?php echo CHtml::encode($data->user_jabber); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_actkey')); ?>:</b>
	<?php echo CHtml::encode($data->user_actkey); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_newpasswd')); ?>:</b>
	<?php echo CHtml::encode($data->user_newpasswd); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_form_salt')); ?>:</b>
	<?php echo CHtml::encode($data->user_form_salt); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_new')); ?>:</b>
	<?php echo CHtml::encode($data->user_new); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_reminded')); ?>:</b>
	<?php echo CHtml::encode($data->user_reminded); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_reminded_time')); ?>:</b>
	<?php echo CHtml::encode($data->user_reminded_time); ?>
	<br />

	*/ ?>

</div>