<h2>Viewing #<?php echo $blog->id; ?></h2>

<p>
	<strong>Title:</strong>
	<?php echo $blog->title; ?></p>
<p>
	<strong>Slug:</strong>
	<?php echo $blog->slug; ?></p>
<p>
	<strong>Body:</strong>
	<?php echo $blog->body; ?></p>
<p>
	<strong>Date:</strong>
	<?php echo $blog->date; ?></p>

<?php echo Html::anchor('admin/blog/edit/'.$blog->id, 'Edit'); ?> |
<?php echo Html::anchor('admin/blog', 'Back'); ?>