<h2>Editing <span class='muted'>Users_sessionscope</span></h2>
<br>

<?php echo render('users\sessionscopes/_form'); ?>
<p>
	<?php echo Html::anchor('users/sessionscopes/view/'.$users_sessionscope->id, 'View'); ?> |
	<?php echo Html::anchor('users/sessionscopes', 'Back'); ?></p>
