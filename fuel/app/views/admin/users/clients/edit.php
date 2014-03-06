<h2>Editing Users_client</h2>
<br>

<?php echo render('admin\users\clients/_form'); ?>
<p>
	<?php echo Html::anchor('admin/users/clients/view/'.$users_client->id, 'View'); ?> |
	<?php echo Html::anchor('admin/users/clients', 'Back'); ?></p>
