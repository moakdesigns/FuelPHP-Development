<h2>Editing <span class='muted'>Users_role_permission</span></h2>
<br>

<?php echo render('users\role\permissions/_form'); ?>
<p>
	<?php echo Html::anchor('users/role/permissions/view/'.$users_role_permission->id, 'View'); ?> |
	<?php echo Html::anchor('users/role/permissions', 'Back'); ?></p>
