<h2>Viewing <span class='muted'>#<?php echo $users_group_role->id; ?></span></h2>

<p>
	<strong>Group id:</strong>
	<?php echo $users_group_role->group_id; ?></p>
<p>
	<strong>Role id:</strong>
	<?php echo $users_group_role->role_id; ?></p>

<?php echo Html::anchor('users/group/roles/edit/'.$users_group_role->id, 'Edit'); ?> |
<?php echo Html::anchor('users/group/roles', 'Back'); ?>