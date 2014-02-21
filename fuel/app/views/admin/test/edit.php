<h2>Editing Test</h2>
<br>

<?php echo render('admin\test/_form'); ?>
<p>
	<?php echo Html::anchor('admin/test/view/'.$test->id, 'View'); ?> |
	<?php echo Html::anchor('admin/test', 'Back'); ?></p>
