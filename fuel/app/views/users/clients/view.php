<h2>Viewing <span class='muted'>#<?php echo $users_client->id; ?></span></h2>

<p>
	<strong>Name:</strong>
	<?php echo $users_client->name; ?></p>
<p>
	<strong>Client id:</strong>
	<?php echo $users_client->client_id; ?></p>
<p>
	<strong>Client secret:</strong>
	<?php echo $users_client->client_secret; ?></p>
<p>
	<strong>Redirect uri:</strong>
	<?php echo $users_client->redirect_uri; ?></p>
<p>
	<strong>Auto approve:</strong>
	<?php echo $users_client->auto_approve; ?></p>
<p>
	<strong>Autonomous:</strong>
	<?php echo $users_client->autonomous; ?></p>
<p>
	<strong>Status:</strong>
	<?php echo $users_client->status; ?></p>
<p>
	<strong>Suspended:</strong>
	<?php echo $users_client->suspended; ?></p>
<p>
	<strong>Notes:</strong>
	<?php echo $users_client->notes; ?></p>

<?php echo Html::anchor('users/clients/edit/'.$users_client->id, 'Edit'); ?> |
<?php echo Html::anchor('users/clients', 'Back'); ?>