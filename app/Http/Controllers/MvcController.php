<?php
/*
    Created By -- Zeshan Tariq
    Date       -- 5/9/16	
*/ 
namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

use Illuminate\Http\Request;

class MvcController extends Controller {

	private $html_head = '<!DOCTYPE html>
			  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
			  <html>
			  <body>';
	
	private $html_foot = '</html>
			  			</body>';
/*

	Modal function contains data related logic that the user works with
	
*/
	public function Modal(Request $request)
	{
		echo $this->html_head.' 
			  	<a href="'.url('/').'/mvc/view">back to view</a>
			  	<h1>Manipulated Data received from Controller and Record Inserted</h1>
			  	<u><h2>Table Record</h2></u>'.
			 $this->html_foot;
			 echo "<br>
				 <h4>
					Interaction with the database is done in Model
				 </h4>";

		try {
				$insert = DB::table("users")->insert(["name" => $request->text]);	  
				$names = DB::table('users')->orderBy('created_at','desc')->get();

				foreach ($names as $key => $name) {
			  	print_r($key.'-'.$name->name.'<br/>');
			}
			 	
			} catch (\Exception $e) {
			 	
			 	print_r($request->text);
			}	 
			  	  
	}

/*
	process all the business logic and incoming requests, manipulate data using the
	Model component Modal function contains data related logic that the user works with
	
*/	

	public function Controller(Request $request)
	{
		echo $this->html_head.'
					<a href="'.url('/').'/mvc/view">back to view</a>
					<h1>Data received from View to Controller:</h1>
					<h3 style="color:green;">'.$request->text.'</h3>
					<form method="get" action="'.url('/').'/mvc/modal">
						<input type="hidden" name="text" value="'.$request->text.'"/>
						<input type="submit" value="send to modal"/>
					</form><br>
				 <h4>
					Any business logic is performed in controller 
				 </h4>'.
			 $this->html_foot;
	}

/*
	used for all the UI logic of the application.
	
*/	
	public function View()
	{
		echo $this->html_head.' 
				<h1>User View</h1>
				<form method="get" action="'.url('/').'/mvc/controller">
					<input name="text" type="text" placeholder="Enter name" required="required" />
					<input type="submit" value="send to controller"/>
				</form>
				<p> note : Please (if not) run migration to fully understand the Model </p><br>
				<h4>
					View is just the graphical representaion of the UI elements <br>
					-> User Interact with these elements
				 </h4>
				'.
			 $this->html_foot;
	}

}
