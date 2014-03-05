<h2>Listing <span class='muted'>Users_sessions</span></h2>
<br>
<?php if ($users_sessions): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Client id</th>
			<th>Redirect uri</th>
			<th>Type id</th>
			<th>Type</th>
			<th>Code</th>
			<th>Access token</th>
			<th>Stage</th>
			<th>First requested</th>
			<th>Last updated</th>
			<th>Limited access</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($users_sessions as $item): ?>		<tr>

			<td><?php echo $item->client_id; ?></td>
			<td><?php echo $item->redirect_uri; ?></td>
			<td><?php echo $item->type_id; ?></td>
			<td><?php echo $item->type; ?></td>
			<td><?php echo $item->code; ?></td>
			<td><?php echo $item->access_token; ?></td>
			<td><?php echo $item->stage; ?></td>
			<td><?php echo $item->first_requested; ?></td>
			<td><?php echo $item->last_updated; ?></td>
			<td><?php echo $item->limited_access; ?></td>
			<td>
				<div class="btn-toolbar">
					<div class="btn-group">
						<?php echo Html::anchor('users/sessions/view/'.$item->id, '<i class="icon-eye-open"></i> View', array('class' => 'btn btn-small')); ?>						<?php echo Html::anchor('users/sessions/edit/'.$item->id, '<i class="icon-wrench"></i> Edit', array('class' => 'btn btn-small')); ?>						<?php echo Html::anchor('users/sessions/delete/'.$item->id, '<i class="icon-trash icon-white"></i> Delete', array('class' => 'btn btn-small btn-danger', 'onclick' => "return confirm('Are you sure?')")); ?>					</div>
				</div>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Users_sessions.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('users/sessions/create', 'Add new Users session', array('class' => 'btn btn-success')); ?>

</p>
