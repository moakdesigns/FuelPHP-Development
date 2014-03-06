<?php
use Orm\Model;

class Model_Users_Session extends Model
{
	protected static $_properties = array(
		'id',
		'client_id',
		'redirect_uri',
		'type_id',
		'type',
		'code',
		'access_token',
		'stage',
		'first_requested',
		'last_updated',
		'limited_access',
	);


	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('client_id', 'Client Id', 'required|max_length[32]');
		$val->add_field('redirect_uri', 'Redirect Uri', 'required|max_length[255]');
		$val->add_field('type_id', 'Type Id', 'required|max_length[64]');
		$val->add_field('type', 'Type', 'required');
		$val->add_field('code', 'Code', 'required');
		$val->add_field('access_token', 'Access Token', 'required|max_length[50]');
		$val->add_field('stage', 'Stage', 'required');
		$val->add_field('first_requested', 'First Requested', 'required|valid_string[numeric]');
		$val->add_field('last_updated', 'Last Updated', 'required|valid_string[numeric]');
		$val->add_field('limited_access', 'Limited Access', 'required');

		return $val;
	}

}
