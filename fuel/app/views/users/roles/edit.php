<h2>Editing <span class='muted'>Users_role</span></h2>
<br>

<?php echo render('users\roles/_form'); ?>
<p>
	<?php echo Html::anchor('users/roles/view/'.$users_role->id, 'View'); ?> |
	<?php echo Html::anchor('users/roles', 'Back'); ?></p>
