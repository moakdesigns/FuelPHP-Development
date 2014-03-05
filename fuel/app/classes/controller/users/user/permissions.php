<?php
class Controller_Users_User_Permissions extends Controller_Template{

	public function action_index()
	{
		$data['users_user_permissions'] = Model_Users_User_Permission::find('all');
		$this->template->title = "Users_user_permissions";
		$this->template->content = View::forge('users\user\permissions/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('users/user/permissions');

		if ( ! $data['users_user_permission'] = Model_Users_User_Permission::find($id))
		{
			Session::set_flash('error', 'Could not find users_user_permission #'.$id);
			Response::redirect('users/user/permissions');
		}

		$this->template->title = "Users_user_permission";
		$this->template->content = View::forge('users\user\permissions/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Users_User_Permission::validate('create');
			
			if ($val->run())
			{
				$users_user_permission = Model_Users_User_Permission::forge(array(
					'user_id' => Input::post('user_id'),
					'perms_id' => Input::post('perms_id'),
					'actions' => Input::post('actions'),
				));

				if ($users_user_permission and $users_user_permission->save())
				{
					Session::set_flash('success', 'Added users_user_permission #'.$users_user_permission->id.'.');

					Response::redirect('users/user/permissions');
				}

				else
				{
					Session::set_flash('error', 'Could not save users_user_permission.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Users_User_Permissions";
		$this->template->content = View::forge('users\user\permissions/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('users/user/permissions');

		if ( ! $users_user_permission = Model_Users_User_Permission::find($id))
		{
			Session::set_flash('error', 'Could not find users_user_permission #'.$id);
			Response::redirect('users/user/permissions');
		}

		$val = Model_Users_User_Permission::validate('edit');

		if ($val->run())
		{
			$users_user_permission->user_id = Input::post('user_id');
			$users_user_permission->perms_id = Input::post('perms_id');
			$users_user_permission->actions = Input::post('actions');

			if ($users_user_permission->save())
			{
				Session::set_flash('success', 'Updated users_user_permission #' . $id);

				Response::redirect('users/user/permissions');
			}

			else
			{
				Session::set_flash('error', 'Could not update users_user_permission #' . $id);
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$users_user_permission->user_id = $val->validated('user_id');
				$users_user_permission->perms_id = $val->validated('perms_id');
				$users_user_permission->actions = $val->validated('actions');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('users_user_permission', $users_user_permission, false);
		}

		$this->template->title = "Users_user_permissions";
		$this->template->content = View::forge('users\user\permissions/edit');

	}

	public function action_delete($id = null)
	{
		is_null($id) and Response::redirect('users/user/permissions');

		if ($users_user_permission = Model_Users_User_Permission::find($id))
		{
			$users_user_permission->delete();

			Session::set_flash('success', 'Deleted users_user_permission #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete users_user_permission #'.$id);
		}

		Response::redirect('users/user/permissions');

	}


}
