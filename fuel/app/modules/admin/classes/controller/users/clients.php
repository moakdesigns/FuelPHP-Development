<?php
class Controller_Users_Clients extends Controller_Template{

	public function action_index()
	{
		$data['users_clients'] = Model_Users_Client::find('all');
		$this->template->title = "Users_clients";
		$this->template->content = View::forge('users\clients/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('users/clients');

		if ( ! $data['users_client'] = Model_Users_Client::find($id))
		{
			Session::set_flash('error', 'Could not find users_client #'.$id);
			Response::redirect('users/clients');
		}

		$this->template->title = "Users_client";
		$this->template->content = View::forge('users\clients/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Users_Client::validate('create');
			
			if ($val->run())
			{
				$users_client = Model_Users_Client::forge(array(
					'name' => Input::post('name'),
					'client_id' => Input::post('client_id'),
					'client_secret' => Input::post('client_secret'),
					'redirect_uri' => Input::post('redirect_uri'),
					'auto_approve' => Input::post('auto_approve'),
					'autonomous' => Input::post('autonomous'),
					'status' => Input::post('status'),
					'suspended' => Input::post('suspended'),
					'notes' => Input::post('notes'),
				));

				if ($users_client and $users_client->save())
				{
					Session::set_flash('success', 'Added users_client #'.$users_client->id.'.');

					Response::redirect('users/clients');
				}

				else
				{
					Session::set_flash('error', 'Could not save users_client.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Users_Clients";
		$this->template->content = View::forge('users\clients/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('users/clients');

		if ( ! $users_client = Model_Users_Client::find($id))
		{
			Session::set_flash('error', 'Could not find users_client #'.$id);
			Response::redirect('users/clients');
		}

		$val = Model_Users_Client::validate('edit');

		if ($val->run())
		{
			$users_client->name = Input::post('name');
			$users_client->client_id = Input::post('client_id');
			$users_client->client_secret = Input::post('client_secret');
			$users_client->redirect_uri = Input::post('redirect_uri');
			$users_client->auto_approve = Input::post('auto_approve');
			$users_client->autonomous = Input::post('autonomous');
			$users_client->status = Input::post('status');
			$users_client->suspended = Input::post('suspended');
			$users_client->notes = Input::post('notes');

			if ($users_client->save())
			{
				Session::set_flash('success', 'Updated users_client #' . $id);

				Response::redirect('users/clients');
			}

			else
			{
				Session::set_flash('error', 'Could not update users_client #' . $id);
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$users_client->name = $val->validated('name');
				$users_client->client_id = $val->validated('client_id');
				$users_client->client_secret = $val->validated('client_secret');
				$users_client->redirect_uri = $val->validated('redirect_uri');
				$users_client->auto_approve = $val->validated('auto_approve');
				$users_client->autonomous = $val->validated('autonomous');
				$users_client->status = $val->validated('status');
				$users_client->suspended = $val->validated('suspended');
				$users_client->notes = $val->validated('notes');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('users_client', $users_client, false);
		}

		$this->template->title = "Users_clients";
		$this->template->content = View::forge('users\clients/edit');

	}

	public function action_delete($id = null)
	{
		is_null($id) and Response::redirect('users/clients');

		if ($users_client = Model_Users_Client::find($id))
		{
			$users_client->delete();

			Session::set_flash('success', 'Deleted users_client #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete users_client #'.$id);
		}

		Response::redirect('users/clients');

	}


}
