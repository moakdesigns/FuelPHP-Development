<h2>Editing <span class='muted'>Users_scope</span></h2>
<br>

<?php echo render('users\scopes/_form'); ?>
<p>
	<?php echo Html::anchor('users/scopes/view/'.$users_scope->id, 'View'); ?> |
	<?php echo Html::anchor('users/scopes', 'Back'); ?></p>
