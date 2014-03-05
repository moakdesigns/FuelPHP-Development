<h2>Editing <span class='muted'>Users_permission</span></h2>
<br>

<?php echo render('users\permissions/_form'); ?>
<p>
	<?php echo Html::anchor('users/permissions/view/'.$users_permission->id, 'View'); ?> |
	<?php echo Html::anchor('users/permissions', 'Back'); ?></p>
