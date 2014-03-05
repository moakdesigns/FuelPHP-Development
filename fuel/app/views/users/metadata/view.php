<h2>Viewing <span class='muted'>#<?php echo $users_metadatum->id; ?></span></h2>

<p>
	<strong>Parent id:</strong>
	<?php echo $users_metadatum->parent_id; ?></p>
<p>
	<strong>Key:</strong>
	<?php echo $users_metadatum->key; ?></p>
<p>
	<strong>Value:</strong>
	<?php echo $users_metadatum->value; ?></p>
<p>
	<strong>User id:</strong>
	<?php echo $users_metadatum->user_id; ?></p>

<?php echo Html::anchor('users/metadata/edit/'.$users_metadatum->id, 'Edit'); ?> |
<?php echo Html::anchor('users/metadata', 'Back'); ?>