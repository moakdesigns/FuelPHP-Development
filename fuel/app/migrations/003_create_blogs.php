<?php

namespace Fuel\Migrations;

class Create_blogs
{
	public function up()
	{
		\DBUtil::create_table('blogs', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'title' => array('constraint' => 255, 'type' => 'varchar'),
			'slug' => array('constraint' => 255, 'type' => 'varchar'),
			'body' => array('type' => 'text'),
			'date' => array('constraint' => 11, 'type' => 'int'),
			'created_at' => array('type' => 'date', 'null' => true),
			'updated_at' => array('type' => 'date', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('blogs');
	}
}