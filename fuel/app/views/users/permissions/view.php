<h2>Viewing <span class='muted'>#<?php echo $users_permission->id; ?></span></h2>

<p>
	<strong>Area:</strong>
	<?php echo $users_permission->area; ?></p>
<p>
	<strong>Permission:</strong>
	<?php echo $users_permission->permission; ?></p>
<p>
	<strong>Description:</strong>
	<?php echo $users_permission->description; ?></p>
<p>
	<strong>Actions:</strong>
	<?php echo $users_permission->actions; ?></p>
<p>
	<strong>User id:</strong>
	<?php echo $users_permission->user_id; ?></p>

<?php echo Html::anchor('users/permissions/edit/'.$users_permission->id, 'Edit'); ?> |
<?php echo Html::anchor('users/permissions', 'Back'); ?>