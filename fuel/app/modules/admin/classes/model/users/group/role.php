<?php
use Orm\Model;

class Model_Users_Group_Role extends Model
{
	protected static $_properties = array(
		'id',
		'group_id',
		'role_id',
	);


	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('group_id', 'Group Id', 'required|valid_string[numeric]');
		$val->add_field('role_id', 'Role Id', 'required|valid_string[numeric]');

		return $val;
	}

}
