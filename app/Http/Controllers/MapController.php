<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class MapController extends Controller {

	
	public function show()
	{
		return  view('maps.map');
	}

	
}
