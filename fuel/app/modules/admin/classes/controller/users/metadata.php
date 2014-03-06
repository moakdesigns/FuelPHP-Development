<?php
class Controller_Users_Metadata extends Controller_Template{

	public function action_index()
	{
		$data['users_metadata'] = Model_Users_Metadatum::find('all');
		$this->template->title = "Users_metadata";
		$this->template->content = View::forge('users\metadata/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('users/metadata');

		if ( ! $data['users_metadatum'] = Model_Users_Metadatum::find($id))
		{
			Session::set_flash('error', 'Could not find users_metadatum #'.$id);
			Response::redirect('users/metadata');
		}

		$this->template->title = "Users_metadatum";
		$this->template->content = View::forge('users\metadata/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Users_Metadatum::validate('create');
			
			if ($val->run())
			{
				$users_metadatum = Model_Users_Metadatum::forge(array(
					'parent_id' => Input::post('parent_id'),
					'key' => Input::post('key'),
					'value' => Input::post('value'),
					'user_id' => Input::post('user_id'),
				));

				if ($users_metadatum and $users_metadatum->save())
				{
					Session::set_flash('success', 'Added users_metadatum #'.$users_metadatum->id.'.');

					Response::redirect('users/metadata');
				}

				else
				{
					Session::set_flash('error', 'Could not save users_metadatum.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Users_Metadata";
		$this->template->content = View::forge('users\metadata/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('users/metadata');

		if ( ! $users_metadatum = Model_Users_Metadatum::find($id))
		{
			Session::set_flash('error', 'Could not find users_metadatum #'.$id);
			Response::redirect('users/metadata');
		}

		$val = Model_Users_Metadatum::validate('edit');

		if ($val->run())
		{
			$users_metadatum->parent_id = Input::post('parent_id');
			$users_metadatum->key = Input::post('key');
			$users_metadatum->value = Input::post('value');
			$users_metadatum->user_id = Input::post('user_id');

			if ($users_metadatum->save())
			{
				Session::set_flash('success', 'Updated users_metadatum #' . $id);

				Response::redirect('users/metadata');
			}

			else
			{
				Session::set_flash('error', 'Could not update users_metadatum #' . $id);
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$users_metadatum->parent_id = $val->validated('parent_id');
				$users_metadatum->key = $val->validated('key');
				$users_metadatum->value = $val->validated('value');
				$users_metadatum->user_id = $val->validated('user_id');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('users_metadatum', $users_metadatum, false);
		}

		$this->template->title = "Users_metadata";
		$this->template->content = View::forge('users\metadata/edit');

	}

	public function action_delete($id = null)
	{
		is_null($id) and Response::redirect('users/metadata');

		if ($users_metadatum = Model_Users_Metadatum::find($id))
		{
			$users_metadatum->delete();

			Session::set_flash('success', 'Deleted users_metadatum #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete users_metadatum #'.$id);
		}

		Response::redirect('users/metadata');

	}


}
