<?php 
namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller {

	public function google()
	{
		if (config('services.google.redirect') == '')
		{
			return "You need to set up your redirect URL in conifg/services.php <br> <a href='https://github.com/laravel/socialite#configuration'> Laravel-Socialite  </a>" ;
		}	
	    
    	return Socialite::with('google')->redirect();
	}

	public function callback()
	{
	    $user = Socialite::with('google')->user();

	    return "You need to set up your redirect URL in conifg/services.php";
	    //return view('google.google',compact('user'));
	}

}
