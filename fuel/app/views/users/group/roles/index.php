<h2>Listing <span class='muted'>Users_group_roles</span></h2>
<br>
<?php if ($users_group_roles): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Group id</th>
			<th>Role id</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($users_group_roles as $item): ?>		<tr>

			<td><?php echo $item->group_id; ?></td>
			<td><?php echo $item->role_id; ?></td>
			<td>
				<div class="btn-toolbar">
					<div class="btn-group">
						<?php echo Html::anchor('users/group/roles/view/'.$item->id, '<i class="icon-eye-open"></i> View', array('class' => 'btn btn-small')); ?>						<?php echo Html::anchor('users/group/roles/edit/'.$item->id, '<i class="icon-wrench"></i> Edit', array('class' => 'btn btn-small')); ?>						<?php echo Html::anchor('users/group/roles/delete/'.$item->id, '<i class="icon-trash icon-white"></i> Delete', array('class' => 'btn btn-small btn-danger', 'onclick' => "return confirm('Are you sure?')")); ?>					</div>
				</div>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Users_group_roles.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('users/group/roles/create', 'Add new Users group role', array('class' => 'btn btn-success')); ?>

</p>
