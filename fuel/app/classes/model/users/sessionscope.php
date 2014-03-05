<?php
use Orm\Model;

class Model_Users_Sessionscope extends Model
{
	protected static $_properties = array(
		'id',
		'session_id',
		'access_token',
		'scope',
	);


	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('session_id', 'Session Id', 'required|valid_string[numeric]');
		$val->add_field('access_token', 'Access Token', 'required|max_length[50]');
		$val->add_field('scope', 'Scope', 'required|max_length[64]');

		return $val;
	}

}
