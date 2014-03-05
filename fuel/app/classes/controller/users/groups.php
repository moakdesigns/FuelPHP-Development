<?php
class Controller_Users_Groups extends Controller_Template{

	public function action_index()
	{
		$data['users_groups'] = Model_Users_Group::find('all');
		$this->template->title = "Users_groups";
		$this->template->content = View::forge('users\groups/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('users/groups');

		if ( ! $data['users_group'] = Model_Users_Group::find($id))
		{
			Session::set_flash('error', 'Could not find users_group #'.$id);
			Response::redirect('users/groups');
		}

		$this->template->title = "Users_group";
		$this->template->content = View::forge('users\groups/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Users_Group::validate('create');
			
			if ($val->run())
			{
				$users_group = Model_Users_Group::forge(array(
					'name' => Input::post('name'),
					'user_id' => Input::post('user_id'),
				));

				if ($users_group and $users_group->save())
				{
					Session::set_flash('success', 'Added users_group #'.$users_group->id.'.');

					Response::redirect('users/groups');
				}

				else
				{
					Session::set_flash('error', 'Could not save users_group.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Users_Groups";
		$this->template->content = View::forge('users\groups/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('users/groups');

		if ( ! $users_group = Model_Users_Group::find($id))
		{
			Session::set_flash('error', 'Could not find users_group #'.$id);
			Response::redirect('users/groups');
		}

		$val = Model_Users_Group::validate('edit');

		if ($val->run())
		{
			$users_group->name = Input::post('name');
			$users_group->user_id = Input::post('user_id');

			if ($users_group->save())
			{
				Session::set_flash('success', 'Updated users_group #' . $id);

				Response::redirect('users/groups');
			}

			else
			{
				Session::set_flash('error', 'Could not update users_group #' . $id);
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$users_group->name = $val->validated('name');
				$users_group->user_id = $val->validated('user_id');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('users_group', $users_group, false);
		}

		$this->template->title = "Users_groups";
		$this->template->content = View::forge('users\groups/edit');

	}

	public function action_delete($id = null)
	{
		is_null($id) and Response::redirect('users/groups');

		if ($users_group = Model_Users_Group::find($id))
		{
			$users_group->delete();

			Session::set_flash('success', 'Deleted users_group #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete users_group #'.$id);
		}

		Response::redirect('users/groups');

	}


}
