<h2>Viewing <span class='muted'>#<?php echo $users_group_permission->id; ?></span></h2>

<p>
	<strong>Group id:</strong>
	<?php echo $users_group_permission->group_id; ?></p>
<p>
	<strong>Perms id:</strong>
	<?php echo $users_group_permission->perms_id; ?></p>
<p>
	<strong>Actions:</strong>
	<?php echo $users_group_permission->actions; ?></p>

<?php echo Html::anchor('users/group/permissions/edit/'.$users_group_permission->id, 'Edit'); ?> |
<?php echo Html::anchor('users/group/permissions', 'Back'); ?>