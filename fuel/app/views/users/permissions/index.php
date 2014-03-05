<h2>Listing <span class='muted'>Users_permissions</span></h2>
<br>
<?php if ($users_permissions): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Area</th>
			<th>Permission</th>
			<th>Description</th>
			<th>Actions</th>
			<th>User id</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($users_permissions as $item): ?>		<tr>

			<td><?php echo $item->area; ?></td>
			<td><?php echo $item->permission; ?></td>
			<td><?php echo $item->description; ?></td>
			<td><?php echo $item->actions; ?></td>
			<td><?php echo $item->user_id; ?></td>
			<td>
				<div class="btn-toolbar">
					<div class="btn-group">
						<?php echo Html::anchor('users/permissions/view/'.$item->id, '<i class="icon-eye-open"></i> View', array('class' => 'btn btn-small')); ?>						<?php echo Html::anchor('users/permissions/edit/'.$item->id, '<i class="icon-wrench"></i> Edit', array('class' => 'btn btn-small')); ?>						<?php echo Html::anchor('users/permissions/delete/'.$item->id, '<i class="icon-trash icon-white"></i> Delete', array('class' => 'btn btn-small btn-danger', 'onclick' => "return confirm('Are you sure?')")); ?>					</div>
				</div>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Users_permissions.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('users/permissions/create', 'Add new Users permission', array('class' => 'btn btn-success')); ?>

</p>
