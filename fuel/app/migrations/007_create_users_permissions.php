<?php

namespace Fuel\Migrations;

class Create_users_permissions
{
	public function up()
	{
		\DBUtil::create_table('users_permissions', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'area' => array('constraint' => 25, 'type' => 'varchar'),
			'permission' => array('constraint' => 25, 'type' => 'varchar'),
			'description' => array('constraint' => 255, 'type' => 'varchar'),
			'actions' => array('type' => 'text'),
			'user_id' => array('constraint' => 11, 'type' => 'int'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('users_permissions');
	}
}