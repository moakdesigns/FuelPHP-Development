<h2>Viewing <span class='muted'>#<?php echo $users_user_permission->id; ?></span></h2>

<p>
	<strong>User id:</strong>
	<?php echo $users_user_permission->user_id; ?></p>
<p>
	<strong>Perms id:</strong>
	<?php echo $users_user_permission->perms_id; ?></p>
<p>
	<strong>Actions:</strong>
	<?php echo $users_user_permission->actions; ?></p>

<?php echo Html::anchor('users/user/permissions/edit/'.$users_user_permission->id, 'Edit'); ?> |
<?php echo Html::anchor('users/user/permissions', 'Back'); ?>