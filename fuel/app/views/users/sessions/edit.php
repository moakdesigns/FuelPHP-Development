<h2>Editing <span class='muted'>Users_session</span></h2>
<br>

<?php echo render('users\sessions/_form'); ?>
<p>
	<?php echo Html::anchor('users/sessions/view/'.$users_session->id, 'View'); ?> |
	<?php echo Html::anchor('users/sessions', 'Back'); ?></p>
