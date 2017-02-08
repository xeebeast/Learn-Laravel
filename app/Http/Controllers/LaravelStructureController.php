<?php 
namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class LaravelStructureController extends Controller {

	public function index(Request $request)
	{	
		return view('laravelStructure.laravelVersions');
	}


}
