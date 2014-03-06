<?php
use Orm\Model;

class Model_Users_Role_Permission extends Model
{
	protected static $_properties = array(
		'id',
		'role_id',
		'perms_id',
		'actions',
	);


	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('role_id', 'Role Id', 'required|valid_string[numeric]');
		$val->add_field('perms_id', 'Perms Id', 'required|valid_string[numeric]');
		$val->add_field('actions', 'Actions', 'required');

		return $val;
	}

}
