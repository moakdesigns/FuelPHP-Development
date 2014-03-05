<h2>Viewing <span class='muted'>#<?php echo $users_role_permission->id; ?></span></h2>

<p>
	<strong>Role id:</strong>
	<?php echo $users_role_permission->role_id; ?></p>
<p>
	<strong>Perms id:</strong>
	<?php echo $users_role_permission->perms_id; ?></p>
<p>
	<strong>Actions:</strong>
	<?php echo $users_role_permission->actions; ?></p>

<?php echo Html::anchor('users/role/permissions/edit/'.$users_role_permission->id, 'Edit'); ?> |
<?php echo Html::anchor('users/role/permissions', 'Back'); ?>