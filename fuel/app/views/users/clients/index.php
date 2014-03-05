<h2>Listing <span class='muted'>Users_clients</span></h2>
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
			<th>&nbsp;</th>
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
				<div class="btn-toolbar">
					<div class="btn-group">
						<?php echo Html::anchor('users/clients/view/'.$item->id, '<i class="icon-eye-open"></i> View', array('class' => 'btn btn-small')); ?>						<?php echo Html::anchor('users/clients/edit/'.$item->id, '<i class="icon-wrench"></i> Edit', array('class' => 'btn btn-small')); ?>						<?php echo Html::anchor('users/clients/delete/'.$item->id, '<i class="icon-trash icon-white"></i> Delete', array('class' => 'btn btn-small btn-danger', 'onclick' => "return confirm('Are you sure?')")); ?>					</div>
				</div>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Users_clients.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('users/clients/create', 'Add new Users client', array('class' => 'btn btn-success')); ?>

</p>
