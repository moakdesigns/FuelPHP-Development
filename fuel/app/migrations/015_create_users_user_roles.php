<?php

namespace Fuel\Migrations;

class Create_users_user_roles
{
	public function up()
	{
		\DBUtil::create_table('users_user_roles', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'user_id' => array('constraint' => 11, 'type' => 'int'),
			'role_id' => array('constraint' => 11, 'type' => 'int'),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('users_user_roles');
	}
}