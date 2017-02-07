<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class FacebookController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function facebook()
	{	
		if (config('services.facebook.redirect') == '')
		{
			return "You need to set up your redirect URL in conifg/services.php <br> <a href='https://github.com/laravel/socialite#configuration'> Laravel-Socialite  </a>" ;
		}	
	    return Socialite::with('facebook')->redirect();
	}

	public function callback()
	{
	    $user = Socialite::with('facebook')->user();

	    return view('facebook.facebook',compact('user'));
	}


}
