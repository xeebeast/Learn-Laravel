	<!-- Header -->
@include('bootstrap.layout.header')
	<!-- END Header -->

	<!-- Style -->
@include('Admin_dashboard.assests.dashboard_css')
	<!-- END Style -->

<div class="container-fluid">
	<div class="row"><!-- Main row -->

	<!-- Left Col -->
		<div class="col-md-2 col">
			@include('Admin_dashboard.dashboard_layouts.left_col')
		</div> 
	<!-- END Left col -->

	<!-- Right Content section -->	
		<div class="col-md-10 col">
			@include('Admin_dashboard.dashboard_layouts.admin_content')
		</div>
	<!-- END Right Content section -->		

	</div><!--END Main row -->
</div>

	<!-- JS -->
@include('Admin_dashboard.assests.dashboard_JS')
	<!-- END JS -->