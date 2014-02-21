<h2>Listing Blogs</h2>
<br>
<?php if ($blogs): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Title</th>
			<th>Slug</th>
			<th>Body</th>
			<th>Date</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($blogs as $item): ?>		<tr>

			<td><?php echo $item->title; ?></td>
			<td><?php echo $item->slug; ?></td>
			<td><?php echo $item->body; ?></td>
			<td><?php echo $item->date; ?></td>
			<td>
				<?php echo Html::anchor('admin/blog/view/'.$item->id, 'View'); ?> |
				<?php echo Html::anchor('admin/blog/edit/'.$item->id, 'Edit'); ?> |
				<?php echo Html::anchor('admin/blog/delete/'.$item->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Blogs.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('admin/blog/create', 'Add new Blog', array('class' => 'btn btn-success')); ?>

</p>
