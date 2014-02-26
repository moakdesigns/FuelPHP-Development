<h2>Editing Client</h2>
<br>

<?php echo render('admin\clients/_form'); ?>
<p>
	<?php echo Html::anchor('admin/clients/view/'.$client->id, 'View'); ?> |
	<?php echo Html::anchor('admin/clients', 'Back'); ?></p>
