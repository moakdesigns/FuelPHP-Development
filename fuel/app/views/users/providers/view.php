<h2>Viewing <span class='muted'>#<?php echo $users_provider->id; ?></span></h2>

<p>
	<strong>Parent id:</strong>
	<?php echo $users_provider->parent_id; ?></p>
<p>
	<strong>Provider:</strong>
	<?php echo $users_provider->provider; ?></p>
<p>
	<strong>Uid:</strong>
	<?php echo $users_provider->uid; ?></p>
<p>
	<strong>Secret:</strong>
	<?php echo $users_provider->secret; ?></p>
<p>
	<strong>Access token:</strong>
	<?php echo $users_provider->access_token; ?></p>
<p>
	<strong>Expires:</strong>
	<?php echo $users_provider->expires; ?></p>
<p>
	<strong>Refresh token:</strong>
	<?php echo $users_provider->refresh_token; ?></p>
<p>
	<strong>User id:</strong>
	<?php echo $users_provider->user_id; ?></p>

<?php echo Html::anchor('users/providers/edit/'.$users_provider->id, 'Edit'); ?> |
<?php echo Html::anchor('users/providers', 'Back'); ?>