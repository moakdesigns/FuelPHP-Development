<h2>Editing Blog</h2>
<br>

<?php echo render('admin\blog/_form'); ?>
<p>
	<?php echo Html::anchor('admin/blog/view/'.$blog->id, 'View'); ?> |
	<?php echo Html::anchor('admin/blog', 'Back'); ?></p>
