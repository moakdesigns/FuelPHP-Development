<?php
class Controller_Admin_Resources extends Controller\Admin{

	public function action_index()
	{
		$data['resources'] = Model_Resource::find('all');
		$this->template->title = "Resources";
		$this->template->content = View::forge('admin\resources/index', $data);

	}

	public function action_view($id = null)
	{
		$data['resource'] = Model_Resource::find($id);

		$this->template->title = "Resource";
		$this->template->content = View::forge('admin\resources/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Resource::validate('create');

			if ($val->run())
			{
				$resource = Model_Resource::forge(array(
				));

				if ($resource and $resource->save())
				{
					Session::set_flash('success', e('Added resource #'.$resource->id.'.'));

					Response::redirect('admin/resources');
				}

				else
				{
					Session::set_flash('error', e('Could not save resource.'));
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Resources";
		$this->template->content = View::forge('admin\resources/create');

	}

	public function action_edit($id = null)
	{
		$resource = Model_Resource::find($id);
		$val = Model_Resource::validate('edit');

		if ($val->run())
		{

			if ($resource->save())
			{
				Session::set_flash('success', e('Updated resource #' . $id));

				Response::redirect('admin/resources');
			}

			else
			{
				Session::set_flash('error', e('Could not update resource #' . $id));
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('resource', $resource, false);
		}

		$this->template->title = "Resources";
		$this->template->content = View::forge('admin\resources/edit');

	}

	public function action_delete($id = null)
	{
		if ($resource = Model_Resource::find($id))
		{
			$resource->delete();

			Session::set_flash('success', e('Deleted resource #'.$id));
		}

		else
		{
			Session::set_flash('error', e('Could not delete resource #'.$id));
		}

		Response::redirect('admin/resources');

	}


}