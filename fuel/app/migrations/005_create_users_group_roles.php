<?php

namespace Fuel\Migrations;

class Create_users_group_roles
{
	public function up()
	{
		\DBUtil::create_table('users_group_roles', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'group_id' => array('constraint' => 11, 'type' => 'int'),
			'role_id' => array('constraint' => 11, 'type' => 'int'),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('users_group_roles');
	}
}