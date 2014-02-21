<h2>Viewing #<?php echo $test->id; ?></h2>

<p>
	<strong>Title:</strong>
	<?php echo $test->title; ?></p>
<p>
	<strong>Body:</strong>
	<?php echo $test->body; ?></p>
<p>
	<strong>Date:</strong>
	<?php echo $test->date; ?></p>

<?php echo Html::anchor('admin/test/edit/'.$test->id, 'Edit'); ?> |
<?php echo Html::anchor('admin/test', 'Back'); ?>