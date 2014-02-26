<h2>Viewing #<?php echo $client->id; ?></h2>

<p>
	<strong>Name:</strong>
	<?php echo $client->name; ?></p>
<p>
	<strong>Website:</strong>
	<?php echo $client->website; ?></p>

<?php echo Html::anchor('admin/clients/edit/'.$client->id, 'Edit'); ?> |
<?php echo Html::anchor('admin/clients', 'Back'); ?>