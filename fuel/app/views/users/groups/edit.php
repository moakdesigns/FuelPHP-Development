<h2>Editing <span class='muted'>Users_group</span></h2>
<br>

<?php echo render('users\groups/_form'); ?>
<p>
	<?php echo Html::anchor('users/groups/view/'.$users_group->id, 'View'); ?> |
	<?php echo Html::anchor('users/groups', 'Back'); ?></p>
