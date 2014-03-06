<h2>Listing Users_clients</h2>
<br>
<?php if ($users_clients): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Name</th>
			<th>Client id</th>
			<th>Client secret</th>
			<th>Redirect uri</th>
			<th>Auto approve</th>
			<th>Autonomous</th>
			<th>Status</th>
			<th>Suspended</th>
			<th>Notes</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($users_clients as $item): ?>		<tr>

			<td><?php echo $item->name; ?></td>
			<td><?php echo $item->client_id; ?></td>
			<td><?php echo $item->client_secret; ?></td>
			<td><?php echo $item->redirect_uri; ?></td>
			<td><?php echo $item->auto_approve; ?></td>
			<td><?php echo $item->autonomous; ?></td>
			<td><?php echo $item->status; ?></td>
			<td><?php echo $item->suspended; ?></td>
			<td><?php echo $item->notes; ?></td>
			<td>
				<?php echo Html::anchor('admin/users/clients/view/'.$item->id, 'View'); ?> |
				<?php echo Html::anchor('admin/users/clients/edit/'.$item->id, 'Edit'); ?> |
				<?php echo Html::anchor('admin/users/clients/delete/'.$item->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Users_clients.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('admin/users/clients/create', 'Add new Users client', array('class' => 'btn btn-success')); ?>

</p>
