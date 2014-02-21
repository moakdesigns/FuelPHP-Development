<h2>Listing Tests</h2>
<br>
<?php if ($tests): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Title</th>
			<th>Body</th>
			<th>Date</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($tests as $item): ?>		<tr>

			<td><?php echo $item->title; ?></td>
			<td><?php echo $item->body; ?></td>
			<td><?php echo $item->date; ?></td>
			<td>
				<?php echo Html::anchor('admin/test/view/'.$item->id, 'View'); ?> |
				<?php echo Html::anchor('admin/test/edit/'.$item->id, 'Edit'); ?> |
				<?php echo Html::anchor('admin/test/delete/'.$item->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Tests.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('admin/test/create', 'Add new Test', array('class' => 'btn btn-success')); ?>

</p>
