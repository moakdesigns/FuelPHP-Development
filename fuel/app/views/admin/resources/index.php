<h2>Listing Resources</h2>
<br>
<?php if ($resources): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($resources as $item): ?>		<tr>

			<td>
				<?php echo Html::anchor('admin/resources/view/'.$item->id, 'View'); ?> |
				<?php echo Html::anchor('admin/resources/edit/'.$item->id, 'Edit'); ?> |
				<?php echo Html::anchor('admin/resources/delete/'.$item->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Resources.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('admin/resources/create', 'Add new Resource', array('class' => 'btn btn-success')); ?>

</p>
