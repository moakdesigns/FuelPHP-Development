<?php
class Controller_Users_User_Roles extends Controller_Template{

	public function action_index()
	{
		$data['users_user_roles'] = Model_Users_User_Role::find('all');
		$this->template->title = "Users_user_roles";
		$this->template->content = View::forge('users\user\roles/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('users/user/roles');

		if ( ! $data['users_user_role'] = Model_Users_User_Role::find($id))
		{
			Session::set_flash('error', 'Could not find users_user_role #'.$id);
			Response::redirect('users/user/roles');
		}

		$this->template->title = "Users_user_role";
		$this->template->content = View::forge('users\user\roles/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Users_User_Role::validate('create');
			
			if ($val->run())
			{
				$users_user_role = Model_Users_User_Role::forge(array(
					'user_id' => Input::post('user_id'),
					'role_id' => Input::post('role_id'),
				));

				if ($users_user_role and $users_user_role->save())
				{
					Session::set_flash('success', 'Added users_user_role #'.$users_user_role->id.'.');

					Response::redirect('users/user/roles');
				}

				else
				{
					Session::set_flash('error', 'Could not save users_user_role.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Users_User_Roles";
		$this->template->content = View::forge('users\user\roles/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('users/user/roles');

		if ( ! $users_user_role = Model_Users_User_Role::find($id))
		{
			Session::set_flash('error', 'Could not find users_user_role #'.$id);
			Response::redirect('users/user/roles');
		}

		$val = Model_Users_User_Role::validate('edit');

		if ($val->run())
		{
			$users_user_role->user_id = Input::post('user_id');
			$users_user_role->role_id = Input::post('role_id');

			if ($users_user_role->save())
			{
				Session::set_flash('success', 'Updated users_user_role #' . $id);

				Response::redirect('users/user/roles');
			}

			else
			{
				Session::set_flash('error', 'Could not update users_user_role #' . $id);
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$users_user_role->user_id = $val->validated('user_id');
				$users_user_role->role_id = $val->validated('role_id');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('users_user_role', $users_user_role, false);
		}

		$this->template->title = "Users_user_roles";
		$this->template->content = View::forge('users\user\roles/edit');

	}

	public function action_delete($id = null)
	{
		is_null($id) and Response::redirect('users/user/roles');

		if ($users_user_role = Model_Users_User_Role::find($id))
		{
			$users_user_role->delete();

			Session::set_flash('success', 'Deleted users_user_role #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete users_user_role #'.$id);
		}

		Response::redirect('users/user/roles');

	}


}
