<?php
class Controller_Users_Role_Permissions extends Controller_Template{

	public function action_index()
	{
		$data['users_role_permissions'] = Model_Users_Role_Permission::find('all');
		$this->template->title = "Users_role_permissions";
		$this->template->content = View::forge('users\role\permissions/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('users/role/permissions');

		if ( ! $data['users_role_permission'] = Model_Users_Role_Permission::find($id))
		{
			Session::set_flash('error', 'Could not find users_role_permission #'.$id);
			Response::redirect('users/role/permissions');
		}

		$this->template->title = "Users_role_permission";
		$this->template->content = View::forge('users\role\permissions/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Users_Role_Permission::validate('create');
			
			if ($val->run())
			{
				$users_role_permission = Model_Users_Role_Permission::forge(array(
					'role_id' => Input::post('role_id'),
					'perms_id' => Input::post('perms_id'),
					'actions' => Input::post('actions'),
				));

				if ($users_role_permission and $users_role_permission->save())
				{
					Session::set_flash('success', 'Added users_role_permission #'.$users_role_permission->id.'.');

					Response::redirect('users/role/permissions');
				}

				else
				{
					Session::set_flash('error', 'Could not save users_role_permission.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Users_Role_Permissions";
		$this->template->content = View::forge('users\role\permissions/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('users/role/permissions');

		if ( ! $users_role_permission = Model_Users_Role_Permission::find($id))
		{
			Session::set_flash('error', 'Could not find users_role_permission #'.$id);
			Response::redirect('users/role/permissions');
		}

		$val = Model_Users_Role_Permission::validate('edit');

		if ($val->run())
		{
			$users_role_permission->role_id = Input::post('role_id');
			$users_role_permission->perms_id = Input::post('perms_id');
			$users_role_permission->actions = Input::post('actions');

			if ($users_role_permission->save())
			{
				Session::set_flash('success', 'Updated users_role_permission #' . $id);

				Response::redirect('users/role/permissions');
			}

			else
			{
				Session::set_flash('error', 'Could not update users_role_permission #' . $id);
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$users_role_permission->role_id = $val->validated('role_id');
				$users_role_permission->perms_id = $val->validated('perms_id');
				$users_role_permission->actions = $val->validated('actions');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('users_role_permission', $users_role_permission, false);
		}

		$this->template->title = "Users_role_permissions";
		$this->template->content = View::forge('users\role\permissions/edit');

	}

	public function action_delete($id = null)
	{
		is_null($id) and Response::redirect('users/role/permissions');

		if ($users_role_permission = Model_Users_Role_Permission::find($id))
		{
			$users_role_permission->delete();

			Session::set_flash('success', 'Deleted users_role_permission #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete users_role_permission #'.$id);
		}

		Response::redirect('users/role/permissions');

	}


}
