<h2>Listing <span class='muted'>Users_providers</span></h2>
<br>
<?php if ($users_providers): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Parent id</th>
			<th>Provider</th>
			<th>Uid</th>
			<th>Secret</th>
			<th>Access token</th>
			<th>Expires</th>
			<th>Refresh token</th>
			<th>User id</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($users_providers as $item): ?>		<tr>

			<td><?php echo $item->parent_id; ?></td>
			<td><?php echo $item->provider; ?></td>
			<td><?php echo $item->uid; ?></td>
			<td><?php echo $item->secret; ?></td>
			<td><?php echo $item->access_token; ?></td>
			<td><?php echo $item->expires; ?></td>
			<td><?php echo $item->refresh_token; ?></td>
			<td><?php echo $item->user_id; ?></td>
			<td>
				<div class="btn-toolbar">
					<div class="btn-group">
						<?php echo Html::anchor('users/providers/view/'.$item->id, '<i class="icon-eye-open"></i> View', array('class' => 'btn btn-small')); ?>						<?php echo Html::anchor('users/providers/edit/'.$item->id, '<i class="icon-wrench"></i> Edit', array('class' => 'btn btn-small')); ?>						<?php echo Html::anchor('users/providers/delete/'.$item->id, '<i class="icon-trash icon-white"></i> Delete', array('class' => 'btn btn-small btn-danger', 'onclick' => "return confirm('Are you sure?')")); ?>					</div>
				</div>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Users_providers.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('users/providers/create', 'Add new Users provider', array('class' => 'btn btn-success')); ?>

</p>
