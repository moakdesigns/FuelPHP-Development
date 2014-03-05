<?php
class Controller_Users_Group_Permissions extends Controller_Template{

	public function action_index()
	{
		$data['users_group_permissions'] = Model_Users_Group_Permission::find('all');
		$this->template->title = "Users_group_permissions";
		$this->template->content = View::forge('users\group\permissions/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('users/group/permissions');

		if ( ! $data['users_group_permission'] = Model_Users_Group_Permission::find($id))
		{
			Session::set_flash('error', 'Could not find users_group_permission #'.$id);
			Response::redirect('users/group/permissions');
		}

		$this->template->title = "Users_group_permission";
		$this->template->content = View::forge('users\group\permissions/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Users_Group_Permission::validate('create');
			
			if ($val->run())
			{
				$users_group_permission = Model_Users_Group_Permission::forge(array(
					'group_id' => Input::post('group_id'),
					'perms_id' => Input::post('perms_id'),
					'actions' => Input::post('actions'),
				));

				if ($users_group_permission and $users_group_permission->save())
				{
					Session::set_flash('success', 'Added users_group_permission #'.$users_group_permission->id.'.');

					Response::redirect('users/group/permissions');
				}

				else
				{
					Session::set_flash('error', 'Could not save users_group_permission.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Users_Group_Permissions";
		$this->template->content = View::forge('users\group\permissions/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('users/group/permissions');

		if ( ! $users_group_permission = Model_Users_Group_Permission::find($id))
		{
			Session::set_flash('error', 'Could not find users_group_permission #'.$id);
			Response::redirect('users/group/permissions');
		}

		$val = Model_Users_Group_Permission::validate('edit');

		if ($val->run())
		{
			$users_group_permission->group_id = Input::post('group_id');
			$users_group_permission->perms_id = Input::post('perms_id');
			$users_group_permission->actions = Input::post('actions');

			if ($users_group_permission->save())
			{
				Session::set_flash('success', 'Updated users_group_permission #' . $id);

				Response::redirect('users/group/permissions');
			}

			else
			{
				Session::set_flash('error', 'Could not update users_group_permission #' . $id);
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$users_group_permission->group_id = $val->validated('group_id');
				$users_group_permission->perms_id = $val->validated('perms_id');
				$users_group_permission->actions = $val->validated('actions');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('users_group_permission', $users_group_permission, false);
		}

		$this->template->title = "Users_group_permissions";
		$this->template->content = View::forge('users\group\permissions/edit');

	}

	public function action_delete($id = null)
	{
		is_null($id) and Response::redirect('users/group/permissions');

		if ($users_group_permission = Model_Users_Group_Permission::find($id))
		{
			$users_group_permission->delete();

			Session::set_flash('success', 'Deleted users_group_permission #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete users_group_permission #'.$id);
		}

		Response::redirect('users/group/permissions');

	}


}
