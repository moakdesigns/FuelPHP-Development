<h2>Listing <span class='muted'>Users_scopes</span></h2>
<br>
<?php if ($users_scopes): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Scope</th>
			<th>Name</th>
			<th>Description</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($users_scopes as $item): ?>		<tr>

			<td><?php echo $item->scope; ?></td>
			<td><?php echo $item->name; ?></td>
			<td><?php echo $item->description; ?></td>
			<td>
				<div class="btn-toolbar">
					<div class="btn-group">
						<?php echo Html::anchor('users/scopes/view/'.$item->id, '<i class="icon-eye-open"></i> View', array('class' => 'btn btn-small')); ?>						<?php echo Html::anchor('users/scopes/edit/'.$item->id, '<i class="icon-wrench"></i> Edit', array('class' => 'btn btn-small')); ?>						<?php echo Html::anchor('users/scopes/delete/'.$item->id, '<i class="icon-trash icon-white"></i> Delete', array('class' => 'btn btn-small btn-danger', 'onclick' => "return confirm('Are you sure?')")); ?>					</div>
				</div>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Users_scopes.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('users/scopes/create', 'Add new Users scope', array('class' => 'btn btn-success')); ?>

</p>
