<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AdminDashboardControllre extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function dashboard()
	{
		return view('Admin_dashboard.dashboard_layout');
	}

	public function demo()
	{
		return view('demoView');
	}

	public function demoResult(Request $req)
	{	
		$result_small = 0;
		$result_large = 0;

		$kg_largeBox = 5;
		$kg_smallBox = 1;

		$large       = 10; 
		$small       = 5;

		$total_largeKG = $large*$kg_largeBox;
		$total_smallKG = $small*$kg_smallBox;

		$userInput = $req->userInput;

		$result_large = intval($total_largeKG-$userInput);
		$result_large = intval(($total_largeKG - $result_large) / 5);

		$user_remain =  $userInput-($result_large*5);
		
		
		if($user_remain > 0){

			$result_small = intval($total_smallKG-$user_remain);
			$result_small = intval(($total_smallKG - $result_small) / 1);

		}
		

		dd('Total Large Boxes = '.$result_large.' and total small boxes = '.$result_small);
		

	}


}
