<?php
namespace LastGrade\CMS\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller {

	public function index()
	{
	   return view('admin::blank');
	}

}