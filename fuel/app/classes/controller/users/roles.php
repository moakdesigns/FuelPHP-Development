<?php
class Controller_Users_Roles extends Controller_Template{

	public function action_index()
	{
		$data['users_roles'] = Model_Users_Role::find('all');
		$this->template->title = "Users_roles";
		$this->template->content = View::forge('users\roles/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('users/roles');

		if ( ! $data['users_role'] = Model_Users_Role::find($id))
		{
			Session::set_flash('error', 'Could not find users_role #'.$id);
			Response::redirect('users/roles');
		}

		$this->template->title = "Users_role";
		$this->template->content = View::forge('users\roles/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Users_Role::validate('create');
			
			if ($val->run())
			{
				$users_role = Model_Users_Role::forge(array(
					'name' => Input::post('name'),
					'filter' => Input::post('filter'),
					'user_id' => Input::post('user_id'),
				));

				if ($users_role and $users_role->save())
				{
					Session::set_flash('success', 'Added users_role #'.$users_role->id.'.');

					Response::redirect('users/roles');
				}

				else
				{
					Session::set_flash('error', 'Could not save users_role.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Users_Roles";
		$this->template->content = View::forge('users\roles/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('users/roles');

		if ( ! $users_role = Model_Users_Role::find($id))
		{
			Session::set_flash('error', 'Could not find users_role #'.$id);
			Response::redirect('users/roles');
		}

		$val = Model_Users_Role::validate('edit');

		if ($val->run())
		{
			$users_role->name = Input::post('name');
			$users_role->filter = Input::post('filter');
			$users_role->user_id = Input::post('user_id');

			if ($users_role->save())
			{
				Session::set_flash('success', 'Updated users_role #' . $id);

				Response::redirect('users/roles');
			}

			else
			{
				Session::set_flash('error', 'Could not update users_role #' . $id);
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$users_role->name = $val->validated('name');
				$users_role->filter = $val->validated('filter');
				$users_role->user_id = $val->validated('user_id');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('users_role', $users_role, false);
		}

		$this->template->title = "Users_roles";
		$this->template->content = View::forge('users\roles/edit');

	}

	public function action_delete($id = null)
	{
		is_null($id) and Response::redirect('users/roles');

		if ($users_role = Model_Users_Role::find($id))
		{
			$users_role->delete();

			Session::set_flash('success', 'Deleted users_role #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete users_role #'.$id);
		}

		Response::redirect('users/roles');

	}


}
