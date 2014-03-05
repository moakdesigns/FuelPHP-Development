<h2>Editing <span class='muted'>Users_provider</span></h2>
<br>

<?php echo render('users\providers/_form'); ?>
<p>
	<?php echo Html::anchor('users/providers/view/'.$users_provider->id, 'View'); ?> |
	<?php echo Html::anchor('users/providers', 'Back'); ?></p>
