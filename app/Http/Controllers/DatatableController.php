<?php

namespace App\Http\Controllers;

use App\User;
use Response;
use View;

use Illuminate\Http\Request;

class DatatableController extends Controller
{
    public function users(Request $request)
    {
    	$user = new User();
   	 	$users  = $user->FetchDatatableUserRecords($request);

   	 	$table = 'users'; // Database table name for the Datatable 
    
    	return view ('genericDatatables.datatable', compact('users','table'));
    }


    public function updateDataTables(Request $request)
	{

		$table = $request->table;

        switch ($table) {
            
            case 'users':
                
                $user = new User();
                $users  = $user->UpdateIndexUsersDataTables($request);
                
                return Response::json(array (View::make('genericDatatables.tables.userTable')->with(['users' => $users, 'table' => $table])->render()));

                break;  
            
            default:
                return redirect()->back()->with('error', "error please contact Developers");
                break;
        }

	}

	public function searchDataTables(Request $request)
	{

		$table = $request->table;

        switch ($table) {
            
            case 'users':
                
                $user = new User();
                $users  = $user->SearchIndexUsersDataTables($request);
                
                return Response::json(array (View::make('genericDatatables.tables.userTable')->with(['users' => $users, 'table' => $table])->render()));

                break; 
            
            default:
                return redirect()->back()->with('error', "error please contact Developers");
                break;
        }

	}
}
