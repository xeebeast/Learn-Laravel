<!DOCTYPE html>
<html>
<head>
	<title>User Datatables</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>

<hr>&nbsp;&nbsp;Page will not be reloaded on any updation.
<hr>&nbsp;&nbsp;You just need to update model functions according to your need.
<hr>&nbsp;&nbsp;See the model 'User', it contains two functions for datatable.
<hr>&nbsp;&nbsp;See 'DatatableController' for redirecting functionality, you can update it according to your need.
<hr>
<h3> <b>&nbsp;&nbsp; View Under construction: &nbsp; </b> <span id="date"></span> </h3>
<br>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			
		

			<section class="content">
		         <!-- Panel code starts here -->   
		        <div class="row datatable-row">
		            <div class="col-md-12 datatable">
		                <div class="row">
		                    <div class="col-md-4">
		                        <span>show</span>

		                        <select class="range" id="{{$table}}-range" data-datatable="{{$table}}">
		                          <option value="5">5</option>
		                          <option value="10">10</option>
		                          <option value="15">15</option>
		                          <option value="20">20</option>
		                        </select>
		                        <span>entries</span>
		                    </div>

		                    <div class="col-md-4">
		                        <input type="text" class="userSearch" data-datatable="{{$table}}" id="{{$table}}-Search" name="search" value="" placeholder="Search record">
		                    </div>
		                </div>
		                <span class="{{$table}}-content">@include('genericDatatables.tables.userTable')</span>
		            </div>
		        </div>
		        <!-- Panel code ends here -->   
		        <br><br>   

		    </section><!-- /.content -->

		</div>
	</div>    
</div>	

<hr><hr><hr><hr><hr>

@include('genericDatatables.scripts.userScript')exit		
</body>
</html>