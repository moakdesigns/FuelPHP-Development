<?php
use Orm\Model;

class Model_Users_User_Permission extends Model
{
	protected static $_properties = array(
		'id',
		'user_id',
		'perms_id',
		'actions',
	);


	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('user_id', 'User Id', 'required|valid_string[numeric]');
		$val->add_field('perms_id', 'Perms Id', 'required|valid_string[numeric]');
		$val->add_field('actions', 'Actions', 'required');

		return $val;
	}

}
