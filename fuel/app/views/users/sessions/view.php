<h2>Viewing <span class='muted'>#<?php echo $users_session->id; ?></span></h2>

<p>
	<strong>Client id:</strong>
	<?php echo $users_session->client_id; ?></p>
<p>
	<strong>Redirect uri:</strong>
	<?php echo $users_session->redirect_uri; ?></p>
<p>
	<strong>Type id:</strong>
	<?php echo $users_session->type_id; ?></p>
<p>
	<strong>Type:</strong>
	<?php echo $users_session->type; ?></p>
<p>
	<strong>Code:</strong>
	<?php echo $users_session->code; ?></p>
<p>
	<strong>Access token:</strong>
	<?php echo $users_session->access_token; ?></p>
<p>
	<strong>Stage:</strong>
	<?php echo $users_session->stage; ?></p>
<p>
	<strong>First requested:</strong>
	<?php echo $users_session->first_requested; ?></p>
<p>
	<strong>Last updated:</strong>
	<?php echo $users_session->last_updated; ?></p>
<p>
	<strong>Limited access:</strong>
	<?php echo $users_session->limited_access; ?></p>

<?php echo Html::anchor('users/sessions/edit/'.$users_session->id, 'Edit'); ?> |
<?php echo Html::anchor('users/sessions', 'Back'); ?>