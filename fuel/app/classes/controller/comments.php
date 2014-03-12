<?php

class Controller_Comments extends Controller_Template
{

	public function action_edit()
	{
		$data["subnav"] = array('edit'=> 'active' );
		$this->template->title = 'Comments &raquo; Edit';
		$this->template->content = View::forge('comments/edit', $data);
	}

	public function action_create($id = null)	// first & foremost, $id variable is going to be taken in, set -->  $id = null
	{
		// check to ensure form has been completed
		if(Input::post())
		{
				// build new comment model in order to save comment to database
				$comment = Model_Comment::forge(array(
						'name' => Input::post('name'),
						'comment' => Input::post('comment'),
						'message_id' => Input::post('message_id'),
				));
				
				// $comment is now an object that has info 
				// try and save the comment
				if ($comment and $comment->save())
				{
						Session::set_flash('success', 'Added comment #' . $comment->id . '.');
						Response::redirect('messages/view/' . $comment->message_id);
				}
				else
				{
						Session::set_flash('error', 'Could not save comment.');
				}
		}
		else
		{
				$this->template->set_global('message', $id, false);		// if didn't post anything, then take $id and turn it into var called $message that view can use
		}

		$data["subnav"] = array('create'=> 'active' );
		$this->template->title = 'Comments &raquo; Create';
		$data['form'] = View::forge('comments/_form');
		$this->template->content = View::forge('comments/create', $data);
	}

}
