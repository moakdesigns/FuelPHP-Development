<?php
use Orm\Model;

class Model_Users_User_Role extends Model
{
	protected static $_properties = array(
		'id',
		'user_id',
		'role_id',
	);


	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('user_id', 'User Id', 'required|valid_string[numeric]');
		$val->add_field('role_id', 'Role Id', 'required|valid_string[numeric]');

		return $val;
	}

}
