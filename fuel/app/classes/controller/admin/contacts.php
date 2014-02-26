<?php
class Controller_Admin_Contacts extends Controller\Admin{

	public function action_index()
	{
		$data['contacts'] = Model_Contact::find('all');
		$this->template->title = "Contacts";
		$this->template->content = View::forge('admin\contacts/index', $data);

	}

	public function action_view($id = null)
	{
		$data['contact'] = Model_Contact::find($id);

		$this->template->title = "Contact";
		$this->template->content = View::forge('admin\contacts/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Contact::validate('create');

			if ($val->run())
			{
				$contact = Model_Contact::forge(array(
					'first_name' => Input::post('first_name'),
					'last_name' => Input::post('last_name'),
					'client_id' => Input::post('client_id'),
					'email' => Input::post('email'),
					'phone' => Input::post('phone'),
					'title' => Input::post('title'),
				));

				if ($contact and $contact->save())
				{
					Session::set_flash('success', e('Added contact #'.$contact->id.'.'));

					Response::redirect('admin/contacts');
				}

				else
				{
					Session::set_flash('error', e('Could not save contact.'));
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Contacts";
		$this->template->content = View::forge('admin\contacts/create');

	}

	public function action_edit($id = null)
	{
		$contact = Model_Contact::find($id);
		$val = Model_Contact::validate('edit');

		if ($val->run())
		{
			$contact->first_name = Input::post('first_name');
			$contact->last_name = Input::post('last_name');
			$contact->client_id = Input::post('client_id');
			$contact->email = Input::post('email');
			$contact->phone = Input::post('phone');
			$contact->title = Input::post('title');

			if ($contact->save())
			{
				Session::set_flash('success', e('Updated contact #' . $id));

				Response::redirect('admin/contacts');
			}

			else
			{
				Session::set_flash('error', e('Could not update contact #' . $id));
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$contact->first_name = $val->validated('first_name');
				$contact->last_name = $val->validated('last_name');
				$contact->client_id = $val->validated('client_id');
				$contact->email = $val->validated('email');
				$contact->phone = $val->validated('phone');
				$contact->title = $val->validated('title');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('contact', $contact, false);
		}

		$this->template->title = "Contacts";
		$this->template->content = View::forge('admin\contacts/edit');

	}

	public function action_delete($id = null)
	{
		if ($contact = Model_Contact::find($id))
		{
			$contact->delete();

			Session::set_flash('success', e('Deleted contact #'.$id));
		}

		else
		{
			Session::set_flash('error', e('Could not delete contact #'.$id));
		}

		Response::redirect('admin/contacts');

	}


}