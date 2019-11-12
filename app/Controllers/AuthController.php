<?php

namespace App\Controllers;

use App\User;
use Gagyi\Auth\Auth;
use Gagyi\Vakol\View;
use Gagyi\Routes\Router;
use Gagyi\Support\Support;
use Gagyi\Request\Request;
use Gagyi\Tarolas\Tarolas;
use Gagyi\Architecture\BaseController as Controller;

class AuthController extends Controller
{

	public function login()
	{
		return View::view('auth/login');
	}

	public function register()
	{
		return View::view('auth/register');
	}

	public function logincontinue()
	{
		$request = new Request();

		// Try to find the user
		// ...
		global $baseDir;
		include_once($baseDir . '/app/User.php');
		$user = User::where('user_name', $request->username)->get();

		// User found?
		if ($user) {

			// Validate the password
			if (!Auth::validatePassword($user, $request->password)) {

				// Wrong password.
				$error = 'Password not correct.';
				return Router::redirect('/login', compact('error'));
			}
		}
		else {
			$error = 'User not found.';
			return Router::redirect('/login', compact('error'));
		}

		// Everything is fine, proceed with log in.
		// Set session user.

		Auth::logIn($user);
		$redirecturi = $_SESSION['real_uri'] ?? '/';
		return Router::redirect($redirecturi);
	}

	public function logout()
	{
		//Auth::logOut();
		return '';
		//return Router::redirect('/');
	}
}
