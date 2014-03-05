<h2>Editing <span class='muted'>Users_metadatum</span></h2>
<br>

<?php echo render('users\metadata/_form'); ?>
<p>
	<?php echo Html::anchor('users/metadata/view/'.$users_metadatum->id, 'View'); ?> |
	<?php echo Html::anchor('users/metadata', 'Back'); ?></p>
