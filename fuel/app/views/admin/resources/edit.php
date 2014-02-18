<h2>Editing Resource</h2>
<br>

<?php echo render('admin\resources/_form'); ?>
<p>
	<?php echo Html::anchor('admin/resources/view/'.$resource->id, 'View'); ?> |
	<?php echo Html::anchor('admin/resources', 'Back'); ?></p>
