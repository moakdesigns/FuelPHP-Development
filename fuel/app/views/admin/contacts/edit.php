<h2>Editing Contact</h2>
<br>

<?php echo render('admin\contacts/_form'); ?>
<p>
	<?php echo Html::anchor('admin/contacts/view/'.$contact->id, 'View'); ?> |
	<?php echo Html::anchor('admin/contacts', 'Back'); ?></p>
