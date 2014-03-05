<?php
class Controller_Users_Scopes extends Controller_Template{

	public function action_index()
	{
		$data['users_scopes'] = Model_Users_Scope::find('all');
		$this->template->title = "Users_scopes";
		$this->template->content = View::forge('users\scopes/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('users/scopes');

		if ( ! $data['users_scope'] = Model_Users_Scope::find($id))
		{
			Session::set_flash('error', 'Could not find users_scope #'.$id);
			Response::redirect('users/scopes');
		}

		$this->template->title = "Users_scope";
		$this->template->content = View::forge('users\scopes/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Users_Scope::validate('create');
			
			if ($val->run())
			{
				$users_scope = Model_Users_Scope::forge(array(
					'scope' => Input::post('scope'),
					'name' => Input::post('name'),
					'description' => Input::post('description'),
				));

				if ($users_scope and $users_scope->save())
				{
					Session::set_flash('success', 'Added users_scope #'.$users_scope->id.'.');

					Response::redirect('users/scopes');
				}

				else
				{
					Session::set_flash('error', 'Could not save users_scope.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Users_Scopes";
		$this->template->content = View::forge('users\scopes/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('users/scopes');

		if ( ! $users_scope = Model_Users_Scope::find($id))
		{
			Session::set_flash('error', 'Could not find users_scope #'.$id);
			Response::redirect('users/scopes');
		}

		$val = Model_Users_Scope::validate('edit');

		if ($val->run())
		{
			$users_scope->scope = Input::post('scope');
			$users_scope->name = Input::post('name');
			$users_scope->description = Input::post('description');

			if ($users_scope->save())
			{
				Session::set_flash('success', 'Updated users_scope #' . $id);

				Response::redirect('users/scopes');
			}

			else
			{
				Session::set_flash('error', 'Could not update users_scope #' . $id);
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$users_scope->scope = $val->validated('scope');
				$users_scope->name = $val->validated('name');
				$users_scope->description = $val->validated('description');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('users_scope', $users_scope, false);
		}

		$this->template->title = "Users_scopes";
		$this->template->content = View::forge('users\scopes/edit');

	}

	public function action_delete($id = null)
	{
		is_null($id) and Response::redirect('users/scopes');

		if ($users_scope = Model_Users_Scope::find($id))
		{
			$users_scope->delete();

			Session::set_flash('success', 'Deleted users_scope #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete users_scope #'.$id);
		}

		Response::redirect('users/scopes');

	}


}
