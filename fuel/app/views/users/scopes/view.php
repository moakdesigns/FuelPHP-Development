<h2>Viewing <span class='muted'>#<?php echo $users_scope->id; ?></span></h2>

<p>
	<strong>Scope:</strong>
	<?php echo $users_scope->scope; ?></p>
<p>
	<strong>Name:</strong>
	<?php echo $users_scope->name; ?></p>
<p>
	<strong>Description:</strong>
	<?php echo $users_scope->description; ?></p>

<?php echo Html::anchor('users/scopes/edit/'.$users_scope->id, 'Edit'); ?> |
<?php echo Html::anchor('users/scopes', 'Back'); ?>