<h2>Listing <span class='muted'>Users_user_permissions</span></h2>
<br>
<?php if ($users_user_permissions): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>User id</th>
			<th>Perms id</th>
			<th>Actions</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($users_user_permissions as $item): ?>		<tr>

			<td><?php echo $item->user_id; ?></td>
			<td><?php echo $item->perms_id; ?></td>
			<td><?php echo $item->actions; ?></td>
			<td>
				<div class="btn-toolbar">
					<div class="btn-group">
						<?php echo Html::anchor('users/user/permissions/view/'.$item->id, '<i class="icon-eye-open"></i> View', array('class' => 'btn btn-small')); ?>						<?php echo Html::anchor('users/user/permissions/edit/'.$item->id, '<i class="icon-wrench"></i> Edit', array('class' => 'btn btn-small')); ?>						<?php echo Html::anchor('users/user/permissions/delete/'.$item->id, '<i class="icon-trash icon-white"></i> Delete', array('class' => 'btn btn-small btn-danger', 'onclick' => "return confirm('Are you sure?')")); ?>					</div>
				</div>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Users_user_permissions.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('users/user/permissions/create', 'Add new Users user permission', array('class' => 'btn btn-success')); ?>

</p>
