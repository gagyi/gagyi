<?php

namespace App\Controllers;

use App\User;
use App\Team;
use App\Metric;
use Gagyi\Auth\Auth;
use Gagyi\Vakol\View;
use Gagyi\Routes\Router;
use Gagyi\Request\Request;
use Gagyi\Support\Support;
use Gagyi\Tarolas\Tarolas;
use Gagyi\Architecture\BaseController as Controller;

class MainController extends Controller
{

	public function index() {
		return View::view('index');
	}

}
