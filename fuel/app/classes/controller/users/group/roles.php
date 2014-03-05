<?php
class Controller_Users_Group_Roles extends Controller_Template{

	public function action_index()
	{
		$data['users_group_roles'] = Model_Users_Group_Role::find('all');
		$this->template->title = "Users_group_roles";
		$this->template->content = View::forge('users\group\roles/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('users/group/roles');

		if ( ! $data['users_group_role'] = Model_Users_Group_Role::find($id))
		{
			Session::set_flash('error', 'Could not find users_group_role #'.$id);
			Response::redirect('users/group/roles');
		}

		$this->template->title = "Users_group_role";
		$this->template->content = View::forge('users\group\roles/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Users_Group_Role::validate('create');
			
			if ($val->run())
			{
				$users_group_role = Model_Users_Group_Role::forge(array(
					'group_id' => Input::post('group_id'),
					'role_id' => Input::post('role_id'),
				));

				if ($users_group_role and $users_group_role->save())
				{
					Session::set_flash('success', 'Added users_group_role #'.$users_group_role->id.'.');

					Response::redirect('users/group/roles');
				}

				else
				{
					Session::set_flash('error', 'Could not save users_group_role.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Users_Group_Roles";
		$this->template->content = View::forge('users\group\roles/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('users/group/roles');

		if ( ! $users_group_role = Model_Users_Group_Role::find($id))
		{
			Session::set_flash('error', 'Could not find users_group_role #'.$id);
			Response::redirect('users/group/roles');
		}

		$val = Model_Users_Group_Role::validate('edit');

		if ($val->run())
		{
			$users_group_role->group_id = Input::post('group_id');
			$users_group_role->role_id = Input::post('role_id');

			if ($users_group_role->save())
			{
				Session::set_flash('success', 'Updated users_group_role #' . $id);

				Response::redirect('users/group/roles');
			}

			else
			{
				Session::set_flash('error', 'Could not update users_group_role #' . $id);
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$users_group_role->group_id = $val->validated('group_id');
				$users_group_role->role_id = $val->validated('role_id');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('users_group_role', $users_group_role, false);
		}

		$this->template->title = "Users_group_roles";
		$this->template->content = View::forge('users\group\roles/edit');

	}

	public function action_delete($id = null)
	{
		is_null($id) and Response::redirect('users/group/roles');

		if ($users_group_role = Model_Users_Group_Role::find($id))
		{
			$users_group_role->delete();

			Session::set_flash('success', 'Deleted users_group_role #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete users_group_role #'.$id);
		}

		Response::redirect('users/group/roles');

	}


}
