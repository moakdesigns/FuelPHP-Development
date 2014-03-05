<h2>Listing <span class='muted'>Users_metadata</span></h2>
<br>
<?php if ($users_metadata): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Parent id</th>
			<th>Key</th>
			<th>Value</th>
			<th>User id</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($users_metadata as $item): ?>		<tr>

			<td><?php echo $item->parent_id; ?></td>
			<td><?php echo $item->key; ?></td>
			<td><?php echo $item->value; ?></td>
			<td><?php echo $item->user_id; ?></td>
			<td>
				<div class="btn-toolbar">
					<div class="btn-group">
						<?php echo Html::anchor('users/metadata/view/'.$item->id, '<i class="icon-eye-open"></i> View', array('class' => 'btn btn-small')); ?>						<?php echo Html::anchor('users/metadata/edit/'.$item->id, '<i class="icon-wrench"></i> Edit', array('class' => 'btn btn-small')); ?>						<?php echo Html::anchor('users/metadata/delete/'.$item->id, '<i class="icon-trash icon-white"></i> Delete', array('class' => 'btn btn-small btn-danger', 'onclick' => "return confirm('Are you sure?')")); ?>					</div>
				</div>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Users_metadata.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('users/metadata/create', 'Add new Users metadatum', array('class' => 'btn btn-success')); ?>

</p>
