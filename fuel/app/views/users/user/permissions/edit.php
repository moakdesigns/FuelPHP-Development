<h2>Editing <span class='muted'>Users_user_permission</span></h2>
<br>

<?php echo render('users\user\permissions/_form'); ?>
<p>
	<?php echo Html::anchor('users/user/permissions/view/'.$users_user_permission->id, 'View'); ?> |
	<?php echo Html::anchor('users/user/permissions', 'Back'); ?></p>
