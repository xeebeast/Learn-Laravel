<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class BootstrapController extends Controller {

	
	public function gridSystem()
	{
		return view('bootstrap.grid_system');
	}

	public function navBar()
	{
		return view('bootstrap.Nav_bar');
	}

	public function collapseNav()
	{
		return view('bootstrap.Collapse_Nav_Bar');
	}

	public function carousel()
	{
		return view('bootstrap.Bootstrap_slider_carsoual');
	}

	public function gridOptions()
	{
		return view('bootstrap.grid_options');
	}

}
