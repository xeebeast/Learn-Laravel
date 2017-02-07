<?php 
namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AjaxController extends Controller {

	public function generiAjax(Request $request)
	{	
		return view('generic_Ajax.generic_ajax');
	}

	public function genericAjaxTest(Request $request)
	{
		return $request->test_var;
	}

}
