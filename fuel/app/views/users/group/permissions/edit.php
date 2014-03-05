<h2>Editing <span class='muted'>Users_group_permission</span></h2>
<br>

<?php echo render('users\group\permissions/_form'); ?>
<p>
	<?php echo Html::anchor('users/group/permissions/view/'.$users_group_permission->id, 'View'); ?> |
	<?php echo Html::anchor('users/group/permissions', 'Back'); ?></p>
