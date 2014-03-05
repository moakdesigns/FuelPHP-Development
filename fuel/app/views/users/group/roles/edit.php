<h2>Editing <span class='muted'>Users_group_role</span></h2>
<br>

<?php echo render('users\group\roles/_form'); ?>
<p>
	<?php echo Html::anchor('users/group/roles/view/'.$users_group_role->id, 'View'); ?> |
	<?php echo Html::anchor('users/group/roles', 'Back'); ?></p>
