<!DOCTYPE html>
<html>
<head>
	<title>User Datatables</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>


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

</body>
</html>