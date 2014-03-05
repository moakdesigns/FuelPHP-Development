<h2>Listing <span class='muted'>Users_sessionscopes</span></h2>
<br>
<?php if ($users_sessionscopes): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Session id</th>
			<th>Access token</th>
			<th>Scope</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($users_sessionscopes as $item): ?>		<tr>

			<td><?php echo $item->session_id; ?></td>
			<td><?php echo $item->access_token; ?></td>
			<td><?php echo $item->scope; ?></td>
			<td>
				<div class="btn-toolbar">
					<div class="btn-group">
						<?php echo Html::anchor('users/sessionscopes/view/'.$item->id, '<i class="icon-eye-open"></i> View', array('class' => 'btn btn-small')); ?>						<?php echo Html::anchor('users/sessionscopes/edit/'.$item->id, '<i class="icon-wrench"></i> Edit', array('class' => 'btn btn-small')); ?>						<?php echo Html::anchor('users/sessionscopes/delete/'.$item->id, '<i class="icon-trash icon-white"></i> Delete', array('class' => 'btn btn-small btn-danger', 'onclick' => "return confirm('Are you sure?')")); ?>					</div>
				</div>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Users_sessionscopes.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('users/sessionscopes/create', 'Add new Users sessionscope', array('class' => 'btn btn-success')); ?>

</p>
