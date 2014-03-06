<h2>Viewing #<?php echo $user->id; ?></h2>

<p>
	<strong>First name:</strong>
	<?php echo $user->first_name; ?></p>
<p>
	<strong>Last name:</strong>
	<?php echo $user->last_name; ?></p>

<?php echo Html::anchor('admin/users/edit/'.$user->id, 'Edit'); ?> |
<?php echo Html::anchor('admin/users', 'Back'); ?>