<?php

namespace Fuel\Migrations;

class Create_users_metadatas
{
	public function up()
	{
		\DBUtil::create_table('users_metadatas', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'parent_id' => array('constraint' => 11, 'type' => 'int'),
			'key' => array('constraint' => 20, 'type' => 'varchar'),
			'value' => array('constraint' => 100, 'type' => 'varchar'),
			'user_id' => array('constraint' => 11, 'type' => 'int'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('users_metadatas');
	}
}