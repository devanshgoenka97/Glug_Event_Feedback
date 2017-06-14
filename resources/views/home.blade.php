@section('content')
<section class="header section-padding">
	<div class="background">&nbsp;</div>
	<div class="container">
		<div class="header-text">
		<br />
		<br />
			<h1>GLUG Storehouse</h1>
			<p>
				Download Presentation
				<br /> Feedbacks are always welcome
			</p>
		</div>
	</div>
</section>
<div class="container" style="padding-top:32%">
	<section class="section-padding">
		<div class = "jumbotron text-center">
			<!-- We will put our task here-->
			<div class="panel panel-default">
				<div class="panel-heading">
					<h1 style="color:#f65026; font-size: 40px">
						<span style="color:grey">Upcoming</span> Events
					</h1>
						<table class="table">
						<thead>
							<tr>
								<th>#</th>
								<th>Date</th>
								<th>Event's Name</th>
								<th>Description</th>
								<th>Venue</th>
							</tr>
						</thead>
						<tbody>
							
						</tbody>
					</table>
					</h1>
				</div>
				
			</div>
		</div>
	</section>
</div>
@stop

<!doctype html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title> Glug Storehouse</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="{{ asset('css/style.css')}}">
</head>

<body>

	<header>
		<nav class="navbar navbar-default" role="navigation">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="/">GLUG</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li class="active"><a href="/">Home</a></li>
					<li><a href="/download">Download</a></li>
					<li><a href="/feedback">Feedback</a></li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</nav>
		@yield('content')
	</header>

	<script src="https://code.jquery.com/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>

</html>
