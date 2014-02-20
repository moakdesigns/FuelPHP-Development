<?php

namespace Fuel\Migrations;

class Add_fields_to_contacts
{
	public function up()
	{
		\DBUtil::add_fields('contacts', array(
			'client_id' => array('constraint' => 11, 'type' => 'int'),
			'user_id' => array('constraint' => 11, 'type' => 'int'),

		));
	}

	public function down()
	{
		\DBUtil::drop_fields('contacts', array(
			'client_id'
,			'user_id'

		));
	}
}