<h2>Viewing #<?php echo $contact->id; ?></h2>

<p>
	<strong>First name:</strong>
	<?php echo $contact->first_name; ?></p>
<p>
	<strong>Last name:</strong>
	<?php echo $contact->last_name; ?></p>
<p>
	<strong>Client id:</strong>
	<?php echo $contact->client_id; ?></p>
<p>
	<strong>Email:</strong>
	<?php echo $contact->email; ?></p>
<p>
	<strong>Phone:</strong>
	<?php echo $contact->phone; ?></p>
<p>
	<strong>Title:</strong>
	<?php echo $contact->title; ?></p>

<?php echo Html::anchor('admin/contacts/edit/'.$contact->id, 'Edit'); ?> |
<?php echo Html::anchor('admin/contacts', 'Back'); ?>