<h2>Listing Contacts</h2>
<br>
<?php if ($contacts): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>First name</th>
			<th>Last name</th>
			<th>Client id</th>
			<th>Email</th>
			<th>Phone</th>
			<th>Title</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($contacts as $item): ?>		<tr>

			<td><?php echo $item->first_name; ?></td>
			<td><?php echo $item->last_name; ?></td>
			<td><?php echo $item->client_id; ?></td>
			<td><?php echo $item->email; ?></td>
			<td><?php echo $item->phone; ?></td>
			<td><?php echo $item->title; ?></td>
			<td>
				<?php echo Html::anchor('admin/contacts/view/'.$item->id, 'View'); ?> |
				<?php echo Html::anchor('admin/contacts/edit/'.$item->id, 'Edit'); ?> |
				<?php echo Html::anchor('admin/contacts/delete/'.$item->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Contacts.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('admin/contacts/create', 'Add new Contact', array('class' => 'btn btn-success')); ?>

</p>
