<?php
use Orm\Model;

class Model_Users_Client extends Model
{
	protected static $_properties = array(
		'id',
		'name',
		'client_id',
		'client_secret',
		'redirect_uri',
		'auto_approve',
		'autonomous',
		'status',
		'suspended',
		'notes',
	);


	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('name', 'Name', 'required|max_length[32]');
		$val->add_field('client_id', 'Client Id', 'required|max_length[32]');
		$val->add_field('client_secret', 'Client Secret', 'required|max_length[32]');
		$val->add_field('redirect_uri', 'Redirect Uri', 'required|max_length[255]');
		$val->add_field('auto_approve', 'Auto Approve', 'required');
		$val->add_field('autonomous', 'Autonomous', 'required');
		$val->add_field('status', 'Status', 'required');
		$val->add_field('suspended', 'Suspended', 'required');
		$val->add_field('notes', 'Notes', 'required');

		return $val;
	}

}
