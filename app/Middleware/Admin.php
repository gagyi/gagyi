<?php

namespace Saettem\Gold\Middleware;

use Gagyi\Routes\Router;
use Gagyi\Auth\Auth as BaseAuth;
use Gagyi\Middleware\Middleware;

class Admin extends Middleware
{
	public function authorize()
	{
		if (BaseAuth::loggedIn()) {
			if (BaseAuth::user()->user_admin) { return true; }
			return Router::redirect('/');
		}
		return false;
	}
}
