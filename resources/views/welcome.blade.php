<html>
	<head>
		<title>Laravel</title>
		
		<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

<!-- Style for Welcome page -->

		<style>
			body {
				margin: 0;
				padding: 0;
				width: 100%;
				height: 100%;
				color: white;
				display: table;
				font-weight: 100;
				font-family: 'Lato';
				background: #696969;
				overflow: scroll;
			}

			.container {
				text-align: center;
				vertical-align: middle;
			}

			.content {
				text-align: center;
				display: inline-block;
			}

			.title {
				font-size: 96px;
				margin-bottom: 10px;
			}

			.quote {
				font-size: 30px;
				color: #FFFFFF;
			}
			a:hover{
				cursor: pointer;
				background: #3C3B37;
			}
			a{
				text-decoration: none;
				font-size: 30px;
				color: #FFFFFF;
			}
		</style>
<!-- END Style -->

	</head>
	<body>

		<div class="container">
			<div class="content">
				<div class="title"><b>Laravel Structure</b></div>
				<div class="quote">
					<a href="{{{ url('laravel/history') }}}">
						<b>History</b>
					</a>
				</div>
     		</div>
     	</div>	

		<div class="container">
			<div class="content">
				<div class="title"><b>Bootstrap</b></div>
				<div class="quote">
					<a href="{{{url('bootstrap/grid_system')}}}">
						<b>Grid System</b>
					</a>
				</div>

				<div class="quote">
					<a href="{{{url('bootstrap/grid_option')}}}">
						<b>Grid Options</b>
					</a>
				</div>

				<div class="quote">
					<a href="{{{url('bootstrap/nav_bar')}}}">
						<b>Navigation Bar</b>
					</a>
				</div>

				<div class="quote">
					<a href="{{{url('bootstrap/colp_nav_bar')}}}">
						<b>Collapse Navigation Bar</b>
					</a>
				</div>

				<div class="quote">
					<a href="{{{url('bootstrap/carousel')}}}">
						<b>Carousel</b>
					</a>
				</div>

			</div>
		</div>

		<div class="container">
			<div class="content">
				<div class="title"><b>Ajax</b></div>
				<div class="quote">
					<a href="{{{url('ajax/genric_ajax')}}}">
						<b>Generic Ajax</b>
					</a>
				</div>
     		</div>
     	</div>	

     	<div class="container">
			<div class="content">
				<div class="title"><b>MVC</b></div>
				<div class="quote">
					<a href="{{{url('MVC/MVC.docx')}}}">
						<b>Notes</b>
					</a>
				</div>
				<div class="quote">	
					<a href="{{{url('mvc/view')}}}">
						<b>MVC through Function</b>
					</a>
				</div>
     		</div>
     	</div>

     	<div class="container">
			<div class="content">
				<div class="title"><b>Social Login</b></div>
				<div class="quote">
					<a href="{{{url('facebook')}}}">
						<b>Fb login</b>
					</a>
				</div>
				<div class="quote">
					<a href="{{{url('twitter')}}}">
						<b>Twitter login</b>
					</a>
				</div>
				<div class="quote">
					<a href="{{{url('google')}}}">
						<b>Google login</b>
					</a>
				</div>
     		</div>
     	</div>

     	<div class="container">
			<div class="content">
				<div class="title"><b>Dashboard</b></div>
				<div class="quote">
					<a href="{{{url('dashboard')}}}">
						<b>layout</b>
					</a>
				</div>
     		</div>
     	</div>

<!-- Javascript for Welcome page -->

<script type="text/javascript">
	
$(".quote").hover(
	function(){
	  $(this).filter(':not(:animated)').animate({
	     marginLeft:'9px'
	  },'fast');
	// This only fires if the row is not undergoing an animation when you mouseover it
	},
	function() {
	  $(this).animate({
	     marginLeft:'0px'
	  },'fast');
});


</script>

<!-- END Javascript -->

	</body>
</html>
