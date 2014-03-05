<h2>Editing <span class='muted'>Users_client</span></h2>
<br>

<?php echo render('users\clients/_form'); ?>
<p>
	<?php echo Html::anchor('users/clients/view/'.$users_client->id, 'View'); ?> |
	<?php echo Html::anchor('users/clients', 'Back'); ?></p>
