<?php

namespace Fuel\Migrations;

class Create_users_user_permissions
{
	public function up()
	{
		\DBUtil::create_table('users_user_permissions', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'user_id' => array('constraint' => 11, 'type' => 'int'),
			'perms_id' => array('constraint' => 11, 'type' => 'int'),
			'actions' => array('type' => 'text'),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('users_user_permissions');
	}
}