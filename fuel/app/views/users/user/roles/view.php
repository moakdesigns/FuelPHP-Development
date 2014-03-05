<h2>Viewing <span class='muted'>#<?php echo $users_user_role->id; ?></span></h2>

<p>
	<strong>User id:</strong>
	<?php echo $users_user_role->user_id; ?></p>
<p>
	<strong>Role id:</strong>
	<?php echo $users_user_role->role_id; ?></p>

<?php echo Html::anchor('users/user/roles/edit/'.$users_user_role->id, 'Edit'); ?> |
<?php echo Html::anchor('users/user/roles', 'Back'); ?>