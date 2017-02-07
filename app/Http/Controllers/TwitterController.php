<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Socialize;

class TwitterController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function twitter()
	{
		if (config('services.twitter.redirect') == '')
		{
			return "You need to set up your redirect URL in conifg/services.php <br> <a href='https://github.com/laravel/socialite#configuration'> Laravel-Socialite  </a>" ;
		}	
	     
    	return Socialite::with('twitter')->redirect();
	}

	public function callback()
	{
	    $user = Socialite::with('twitter')->user();

	    return "You need to set up your redirect URL in conifg/services.php";
	    //return view('twitter.twitter',compact('user'));
	}

}
