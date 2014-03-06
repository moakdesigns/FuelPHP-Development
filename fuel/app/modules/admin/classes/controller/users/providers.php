<?php
class Controller_Users_Providers extends Controller_Template{

	public function action_index()
	{
		$data['users_providers'] = Model_Users_Provider::find('all');
		$this->template->title = "Users_providers";
		$this->template->content = View::forge('users\providers/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('users/providers');

		if ( ! $data['users_provider'] = Model_Users_Provider::find($id))
		{
			Session::set_flash('error', 'Could not find users_provider #'.$id);
			Response::redirect('users/providers');
		}

		$this->template->title = "Users_provider";
		$this->template->content = View::forge('users\providers/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Users_Provider::validate('create');
			
			if ($val->run())
			{
				$users_provider = Model_Users_Provider::forge(array(
					'parent_id' => Input::post('parent_id'),
					'provider' => Input::post('provider'),
					'uid' => Input::post('uid'),
					'secret' => Input::post('secret'),
					'access_token' => Input::post('access_token'),
					'expires' => Input::post('expires'),
					'refresh_token' => Input::post('refresh_token'),
					'user_id' => Input::post('user_id'),
				));

				if ($users_provider and $users_provider->save())
				{
					Session::set_flash('success', 'Added users_provider #'.$users_provider->id.'.');

					Response::redirect('users/providers');
				}

				else
				{
					Session::set_flash('error', 'Could not save users_provider.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Users_Providers";
		$this->template->content = View::forge('users\providers/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('users/providers');

		if ( ! $users_provider = Model_Users_Provider::find($id))
		{
			Session::set_flash('error', 'Could not find users_provider #'.$id);
			Response::redirect('users/providers');
		}

		$val = Model_Users_Provider::validate('edit');

		if ($val->run())
		{
			$users_provider->parent_id = Input::post('parent_id');
			$users_provider->provider = Input::post('provider');
			$users_provider->uid = Input::post('uid');
			$users_provider->secret = Input::post('secret');
			$users_provider->access_token = Input::post('access_token');
			$users_provider->expires = Input::post('expires');
			$users_provider->refresh_token = Input::post('refresh_token');
			$users_provider->user_id = Input::post('user_id');

			if ($users_provider->save())
			{
				Session::set_flash('success', 'Updated users_provider #' . $id);

				Response::redirect('users/providers');
			}

			else
			{
				Session::set_flash('error', 'Could not update users_provider #' . $id);
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$users_provider->parent_id = $val->validated('parent_id');
				$users_provider->provider = $val->validated('provider');
				$users_provider->uid = $val->validated('uid');
				$users_provider->secret = $val->validated('secret');
				$users_provider->access_token = $val->validated('access_token');
				$users_provider->expires = $val->validated('expires');
				$users_provider->refresh_token = $val->validated('refresh_token');
				$users_provider->user_id = $val->validated('user_id');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('users_provider', $users_provider, false);
		}

		$this->template->title = "Users_providers";
		$this->template->content = View::forge('users\providers/edit');

	}

	public function action_delete($id = null)
	{
		is_null($id) and Response::redirect('users/providers');

		if ($users_provider = Model_Users_Provider::find($id))
		{
			$users_provider->delete();

			Session::set_flash('success', 'Deleted users_provider #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete users_provider #'.$id);
		}

		Response::redirect('users/providers');

	}


}
