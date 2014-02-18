<?php

namespace Fuel\Core

class Controller_Base extends Controller_Template {

	public function before()
	{
		parent::before();

		// Assign current_user to the instance so controllers can use it
		$this->current_user = Auth::check()
			? (Config::get('auth.driver', 'Simpleauth') == 'Ormauth' ? User::find_by_username(Auth::get_screen_name()) : User::find_by_username(Auth::get_screen_name()))
			: null;

		// Set a global variable so views can use it
		View::set_global('current_user', $this->current_user);
	}

}
