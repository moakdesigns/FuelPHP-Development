<?php
use Orm\Model;

class Model_Users_Scope extends Model
{
	protected static $_properties = array(
		'id',
		'scope',
		'name',
		'description',
	);


	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('scope', 'Scope', 'required|max_length[64]');
		$val->add_field('name', 'Name', 'required|max_length[64]');
		$val->add_field('description', 'Description', 'required|max_length[255]');

		return $val;
	}

}
