<?php

namespace App\Http\Controllers;

use App\User;

use Illuminate\Http\Request;

class DatatableController extends Controller
{
    public function userDatatable(Request $request)
    {
    	$user = new User();
   	 	$users  = $user->FetchDatatableUserRecords($request);

   	 	$table = 'learn-laravel_users';
    
    	return view ('genericDatatables.datatable', compact('users','table'));
    }
}
