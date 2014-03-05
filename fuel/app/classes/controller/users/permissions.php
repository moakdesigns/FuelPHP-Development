<?php
class Controller_Users_Permissions extends Controller_Template{

	public function action_index()
	{
		$data['users_permissions'] = Model_Users_Permission::find('all');
		$this->template->title = "Users_permissions";
		$this->template->content = View::forge('users\permissions/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('users/permissions');

		if ( ! $data['users_permission'] = Model_Users_Permission::find($id))
		{
			Session::set_flash('error', 'Could not find users_permission #'.$id);
			Response::redirect('users/permissions');
		}

		$this->template->title = "Users_permission";
		$this->template->content = View::forge('users\permissions/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Users_Permission::validate('create');
			
			if ($val->run())
			{
				$users_permission = Model_Users_Permission::forge(array(
					'area' => Input::post('area'),
					'permission' => Input::post('permission'),
					'description' => Input::post('description'),
					'actions' => Input::post('actions'),
					'user_id' => Input::post('user_id'),
				));

				if ($users_permission and $users_permission->save())
				{
					Session::set_flash('success', 'Added users_permission #'.$users_permission->id.'.');

					Response::redirect('users/permissions');
				}

				else
				{
					Session::set_flash('error', 'Could not save users_permission.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Users_Permissions";
		$this->template->content = View::forge('users\permissions/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('users/permissions');

		if ( ! $users_permission = Model_Users_Permission::find($id))
		{
			Session::set_flash('error', 'Could not find users_permission #'.$id);
			Response::redirect('users/permissions');
		}

		$val = Model_Users_Permission::validate('edit');

		if ($val->run())
		{
			$users_permission->area = Input::post('area');
			$users_permission->permission = Input::post('permission');
			$users_permission->description = Input::post('description');
			$users_permission->actions = Input::post('actions');
			$users_permission->user_id = Input::post('user_id');

			if ($users_permission->save())
			{
				Session::set_flash('success', 'Updated users_permission #' . $id);

				Response::redirect('users/permissions');
			}

			else
			{
				Session::set_flash('error', 'Could not update users_permission #' . $id);
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$users_permission->area = $val->validated('area');
				$users_permission->permission = $val->validated('permission');
				$users_permission->description = $val->validated('description');
				$users_permission->actions = $val->validated('actions');
				$users_permission->user_id = $val->validated('user_id');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('users_permission', $users_permission, false);
		}

		$this->template->title = "Users_permissions";
		$this->template->content = View::forge('users\permissions/edit');

	}

	public function action_delete($id = null)
	{
		is_null($id) and Response::redirect('users/permissions');

		if ($users_permission = Model_Users_Permission::find($id))
		{
			$users_permission->delete();

			Session::set_flash('success', 'Deleted users_permission #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete users_permission #'.$id);
		}

		Response::redirect('users/permissions');

	}


}
