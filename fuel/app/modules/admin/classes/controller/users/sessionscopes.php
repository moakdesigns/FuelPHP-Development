<?php
class Controller_Users_Sessionscopes extends Controller_Template{

	public function action_index()
	{
		$data['users_sessionscopes'] = Model_Users_Sessionscope::find('all');
		$this->template->title = "Users_sessionscopes";
		$this->template->content = View::forge('users\sessionscopes/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('users/sessionscopes');

		if ( ! $data['users_sessionscope'] = Model_Users_Sessionscope::find($id))
		{
			Session::set_flash('error', 'Could not find users_sessionscope #'.$id);
			Response::redirect('users/sessionscopes');
		}

		$this->template->title = "Users_sessionscope";
		$this->template->content = View::forge('users\sessionscopes/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Users_Sessionscope::validate('create');
			
			if ($val->run())
			{
				$users_sessionscope = Model_Users_Sessionscope::forge(array(
					'session_id' => Input::post('session_id'),
					'access_token' => Input::post('access_token'),
					'scope' => Input::post('scope'),
				));

				if ($users_sessionscope and $users_sessionscope->save())
				{
					Session::set_flash('success', 'Added users_sessionscope #'.$users_sessionscope->id.'.');

					Response::redirect('users/sessionscopes');
				}

				else
				{
					Session::set_flash('error', 'Could not save users_sessionscope.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Users_Sessionscopes";
		$this->template->content = View::forge('users\sessionscopes/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('users/sessionscopes');

		if ( ! $users_sessionscope = Model_Users_Sessionscope::find($id))
		{
			Session::set_flash('error', 'Could not find users_sessionscope #'.$id);
			Response::redirect('users/sessionscopes');
		}

		$val = Model_Users_Sessionscope::validate('edit');

		if ($val->run())
		{
			$users_sessionscope->session_id = Input::post('session_id');
			$users_sessionscope->access_token = Input::post('access_token');
			$users_sessionscope->scope = Input::post('scope');

			if ($users_sessionscope->save())
			{
				Session::set_flash('success', 'Updated users_sessionscope #' . $id);

				Response::redirect('users/sessionscopes');
			}

			else
			{
				Session::set_flash('error', 'Could not update users_sessionscope #' . $id);
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$users_sessionscope->session_id = $val->validated('session_id');
				$users_sessionscope->access_token = $val->validated('access_token');
				$users_sessionscope->scope = $val->validated('scope');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('users_sessionscope', $users_sessionscope, false);
		}

		$this->template->title = "Users_sessionscopes";
		$this->template->content = View::forge('users\sessionscopes/edit');

	}

	public function action_delete($id = null)
	{
		is_null($id) and Response::redirect('users/sessionscopes');

		if ($users_sessionscope = Model_Users_Sessionscope::find($id))
		{
			$users_sessionscope->delete();

			Session::set_flash('success', 'Deleted users_sessionscope #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete users_sessionscope #'.$id);
		}

		Response::redirect('users/sessionscopes');

	}


}
