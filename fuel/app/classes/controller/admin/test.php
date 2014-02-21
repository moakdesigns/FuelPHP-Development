<?php
class Controller_Admin_Test extends Controller\Admin{

	public function action_index()
	{
		$data['tests'] = Model_Test::find('all');
		$this->template->title = "Tests";
		$this->template->content = View::forge('admin\test/index', $data);

	}

	public function action_view($id = null)
	{
		$data['test'] = Model_Test::find($id);

		$this->template->title = "Test";
		$this->template->content = View::forge('admin\test/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Test::validate('create');

			if ($val->run())
			{
				$test = Model_Test::forge(array(
					'title' => Input::post('title'),
					'body' => Input::post('body'),
					'date' => Input::post('date'),
				));

				if ($test and $test->save())
				{
					Session::set_flash('success', e('Added test #'.$test->id.'.'));

					Response::redirect('admin/test');
				}

				else
				{
					Session::set_flash('error', e('Could not save test.'));
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Tests";
		$this->template->content = View::forge('admin\test/create');

	}

	public function action_edit($id = null)
	{
		$test = Model_Test::find($id);
		$val = Model_Test::validate('edit');

		if ($val->run())
		{
			$test->title = Input::post('title');
			$test->body = Input::post('body');
			$test->date = Input::post('date');

			if ($test->save())
			{
				Session::set_flash('success', e('Updated test #' . $id));

				Response::redirect('admin/test');
			}

			else
			{
				Session::set_flash('error', e('Could not update test #' . $id));
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$test->title = $val->validated('title');
				$test->body = $val->validated('body');
				$test->date = $val->validated('date');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('test', $test, false);
		}

		$this->template->title = "Tests";
		$this->template->content = View::forge('admin\test/edit');

	}

	public function action_delete($id = null)
	{
		if ($test = Model_Test::find($id))
		{
			$test->delete();

			Session::set_flash('success', e('Deleted test #'.$id));
		}

		else
		{
			Session::set_flash('error', e('Could not delete test #'.$id));
		}

		Response::redirect('admin/test');

	}


}