<?php

namespace Fuel\Migrations;

class Create_users_role_permissions
{
	public function up()
	{
		\DBUtil::create_table('users_role_permissions', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'role_id' => array('constraint' => 11, 'type' => 'int'),
			'perms_id' => array('constraint' => 11, 'type' => 'int'),
			'actions' => array('type' => 'text'),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('users_role_permissions');
	}
}