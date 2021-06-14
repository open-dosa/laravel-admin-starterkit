<?php
namespace LastGrade\SBAdmin\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class DashboardController extends Controller {

	public function index($page)
	{
	 	
		if (View::exists('admin::'. $page)) {		
	   		return view('admin::'. $page);
	   	}	
	   	return abort(404);
	}

}