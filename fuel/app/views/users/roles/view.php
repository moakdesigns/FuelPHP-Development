<h2>Viewing <span class='muted'>#<?php echo $users_role->id; ?></span></h2>

<p>
	<strong>Name:</strong>
	<?php echo $users_role->name; ?></p>
<p>
	<strong>Filter:</strong>
	<?php echo $users_role->filter; ?></p>
<p>
	<strong>User id:</strong>
	<?php echo $users_role->user_id; ?></p>

<?php echo Html::anchor('users/roles/edit/'.$users_role->id, 'Edit'); ?> |
<?php echo Html::anchor('users/roles', 'Back'); ?>