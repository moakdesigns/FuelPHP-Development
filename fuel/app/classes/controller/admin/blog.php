<?php
class Controller_Admin_Blog extends Controller\Admin{

	public function action_index()
	{
		$data['blogs'] = Model_Blog::find('all');
		$this->template->title = "Blogs";
		$this->template->content = View::forge('admin\blog/index', $data);

	}

	public function action_view($id = null)
	{
		$data['blog'] = Model_Blog::find($id);

		$this->template->title = "Blog";
		$this->template->content = View::forge('admin\blog/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Blog::validate('create');

			if ($val->run())
			{
				$blog = Model_Blog::forge(array(
					'title' => Input::post('title'),
					'slug' => Input::post('slug'),
					'body' => Input::post('body'),
					'date' => Input::post('date'),
				));

				if ($blog and $blog->save())
				{
					Session::set_flash('success', e('Added blog #'.$blog->id.'.'));

					Response::redirect('admin/blog');
				}

				else
				{
					Session::set_flash('error', e('Could not save blog.'));
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Blogs";
		$this->template->content = View::forge('admin\blog/create');

	}

	public function action_edit($id = null)
	{
		$blog = Model_Blog::find($id);
		$val = Model_Blog::validate('edit');

		if ($val->run())
		{
			$blog->title = Input::post('title');
			$blog->slug = Input::post('slug');
			$blog->body = Input::post('body');
			$blog->date = Input::post('date');

			if ($blog->save())
			{
				Session::set_flash('success', e('Updated blog #' . $id));

				Response::redirect('admin/blog');
			}

			else
			{
				Session::set_flash('error', e('Could not update blog #' . $id));
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$blog->title = $val->validated('title');
				$blog->slug = $val->validated('slug');
				$blog->body = $val->validated('body');
				$blog->date = $val->validated('date');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('blog', $blog, false);
		}

		$this->template->title = "Blogs";
		$this->template->content = View::forge('admin\blog/edit');

	}

	public function action_delete($id = null)
	{
		if ($blog = Model_Blog::find($id))
		{
			$blog->delete();

			Session::set_flash('success', e('Deleted blog #'.$id));
		}

		else
		{
			Session::set_flash('error', e('Could not delete blog #'.$id));
		}

		Response::redirect('admin/blog');

	}


}