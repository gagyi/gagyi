<?php

namespace Saettem\Gold\Middleware;

use Gagyi\Auth\Auth as BaseAuth;
use Gagyi\Middleware\Middleware;

class Auth extends Middleware
{
	public function authorize()
	{
		return BaseAuth::loggedIn();
	}
}
