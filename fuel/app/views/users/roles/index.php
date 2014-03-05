<h2>Listing <span class='muted'>Users_roles</span></h2>
<br>
<?php if ($users_roles): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Name</th>
			<th>Filter</th>
			<th>User id</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($users_roles as $item): ?>		<tr>

			<td><?php echo $item->name; ?></td>
			<td><?php echo $item->filter; ?></td>
			<td><?php echo $item->user_id; ?></td>
			<td>
				<div class="btn-toolbar">
					<div class="btn-group">
						<?php echo Html::anchor('users/roles/view/'.$item->id, '<i class="icon-eye-open"></i> View', array('class' => 'btn btn-small')); ?>						<?php echo Html::anchor('users/roles/edit/'.$item->id, '<i class="icon-wrench"></i> Edit', array('class' => 'btn btn-small')); ?>						<?php echo Html::anchor('users/roles/delete/'.$item->id, '<i class="icon-trash icon-white"></i> Delete', array('class' => 'btn btn-small btn-danger', 'onclick' => "return confirm('Are you sure?')")); ?>					</div>
				</div>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Users_roles.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('users/roles/create', 'Add new Users role', array('class' => 'btn btn-success')); ?>

</p>
