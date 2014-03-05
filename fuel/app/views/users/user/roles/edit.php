<h2>Editing <span class='muted'>Users_user_role</span></h2>
<br>

<?php echo render('users\user\roles/_form'); ?>
<p>
	<?php echo Html::anchor('users/user/roles/view/'.$users_user_role->id, 'View'); ?> |
	<?php echo Html::anchor('users/user/roles', 'Back'); ?></p>
