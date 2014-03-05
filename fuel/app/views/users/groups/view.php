<h2>Viewing <span class='muted'>#<?php echo $users_group->id; ?></span></h2>

<p>
	<strong>Name:</strong>
	<?php echo $users_group->name; ?></p>
<p>
	<strong>User id:</strong>
	<?php echo $users_group->user_id; ?></p>

<?php echo Html::anchor('users/groups/edit/'.$users_group->id, 'Edit'); ?> |
<?php echo Html::anchor('users/groups', 'Back'); ?>