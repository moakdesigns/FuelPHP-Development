<h2>Viewing <span class='muted'>#<?php echo $users_sessionscope->id; ?></span></h2>

<p>
	<strong>Session id:</strong>
	<?php echo $users_sessionscope->session_id; ?></p>
<p>
	<strong>Access token:</strong>
	<?php echo $users_sessionscope->access_token; ?></p>
<p>
	<strong>Scope:</strong>
	<?php echo $users_sessionscope->scope; ?></p>

<?php echo Html::anchor('users/sessionscopes/edit/'.$users_sessionscope->id, 'Edit'); ?> |
<?php echo Html::anchor('users/sessionscopes', 'Back'); ?>