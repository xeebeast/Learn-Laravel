@include('bootstrap.layout.header')

<style type="text/css">
	h3{
		color:white;
	}
	h3{
		color:green;
	}
	h2{
		color:white;
	}
</style>

<div class="container">
	<div class="row">
		<div class="span12">
		<span>
			<h3>Name :</h3>	 <h2>{{$user->name}}</h2>
		</span>
		</div>
	</div>
	<div class="row">
		<div class="span12">
			<h3>Profile Image :</h3> <img src="{{$user->avatar}}"  alt="user_img" class="img-thumbnail" />
		</div>
	</div>
</div>