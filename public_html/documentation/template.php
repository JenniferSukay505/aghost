<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<!--font styles-->
		<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Acme">

		<!--javascript-->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"
				integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ=="
				crossorigin="anonymous">
		<!--font-awesome-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css"
				integrity="sha384-aUGj/X2zp5rLCbBxumKTCw2Z50WgIr1vs/PFN4praOTvYXWlVyh2UtNUU0KAUhAX" crossorigin="anonymous">

		<!--Animate.css-->
		<link rel="stylesheet" href="://cdnjs.cloudflare.com/ajax/libs/animate.css/3.4.0/animate.min.css">

		<!--Link to custom CSS files here-->
		<link type="text/css" href="../../css/sidepanel.css" rel="stylesheet">
		<link type="text/css" href="../../css/footer.css" rel="stylesheet">
		<link type="text/css" href="../../css/template.css" rel="stylesheet">


		<!--HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries-->
		<!--WARNING: Respond.js doesn't work if you view the page via file://-->
		<!--[if lt IE 9]>
		<script type="text/javascript" src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script type="text/javascript" src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!--js-cookie (for capstone) -->
		<script type="text/javascript" src="//cdnjs.cloudfare.com/ajax/libs/js-cookie/2.0.2/js.cookie.min.js"></script>

		<!--jQuery (necessary for bootstrap's javaScript plugins)-->
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

		<!-- jQuery form validation and additional methods (for capstone) -->
		<script type="text/javascript" src="//cdnjs.cloudfare.com/ajax/libs/jquery.form/3.51/jquery.form.min.js"></script>
		<script type="text/javascript"
				  src="//cdnjs.cloudfare/com/ajax/libs/jquery-validate/1.14.0/jquery.validate.min.js"></script>
		<script type="text/javascript"
				  src="//cdnjs.cloudfare.com/ajax/libs/jquery-validate/1.14.0.additional-methods.min.js"></script>

		<!-- Latest compiled and minified JavaScript -->
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"
				  integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ=="
				  crossorigin="anonymous"></script>

		<!-- jscroll plugin -->
		<script src="./lib/plugins/jscroll/jquery.jscroll.min.js" type="text/javascript"></script>

		<!-- Page Title -->
		<title>Homepage Outline</title>
	</head>

	<body class="sfooter">
		<div class="sfooter-content">
			<!--include the <head> tag-->
			<header>
				<nav class="navbar navbar-default navbar-fixed-top" id="nav" >
					<div class="container-fluid" >
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
									  data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-icon" href="#"><img class="icon"src="../../img/ghostieicon2.png"></a>
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->

						<form class="navbar-form navbar-left" role="search">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Search">
							</div>
							<button type="submit" class="btn btn-default">Submit</button>
						</form>
						<ul class="nav navbar-nav navbar-right">

							<li><a href="#"><i class="fa fa-home fa-fw"></i>&nbsp; Home</a></li>
							<li><a href="#"><i class="fa fa-user"></i>&nbsp;Settings</a></li>
							<li><a href="#"><i class="fa fa-envelope"></i>&nbsp;Messages</a></li>
							<li><a href="#"><i class="fa fa-question"></i>&nbsp;Help</a></li>

						</ul>
					</div>
				</nav>
			</header>
			<!-- side panel here -->
			<div class="container">
				<div class="row">
					<div class="col-md-4 hidden-xs hidden-sm" id="sidepanel">
						<section class="side-panel panel panel-default">
							<ul>
								<li><br></li>
								<li><br></li>
								<li><br></li>
								<li><br></li>
								<li><br></li>
								<li><br></li>



								<li><a href="#"><i class="fa fa-pencil"></i>&nbsp;Settings</a></li>
								<li><br></li>

								<li><a href="#"><i class="fa fa-envelope"></i>&nbsp;Messages</a></li>
								<li><br></li>


								<li><br></li>
								<li><br></li>
								<li><br></li>
								<li><br></li>
								<li><br></li>
								<li><br></li>
								<li><br></li>
								<li><br></li>
								<li><br></li>
								<li><br></li>

							</ul>
						</section>
					</div>

					<!-- main content area -->
					<div class="clearfix"
				</div>
				<div class="col-md-8 col-xs-12">
					<main>

						<!-- load feed -->
						<div class="feed-wrapper">

							<div id="tweet-feed" class=tweet-feed">
							<div class="row">
								<h1>Tweet Suggestions</h1>
								</div>

						<div class="listing clearfix panel panel-default">
							<div class="panel-heading">
								<h4 class="listing-title">
									Tweet title here
								</h4>
							</div>
							<div class="panel-body">
								<p class="listing-text">
									Tweet text here.
								</p>

								<div class="panel-offer">
									<div class="panel-offer">
										<button class="btn btn-primary btn-md" type="button"
												  data-toggle="modal" data-target="#myModal">
											Edit
										</button>
										<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Schedule
											<span class="caret"></span></button>
										<ul class="dropdown-menu">
											<li><a href="#">Tweet Now</a></li>
											<li><a href="#">Schedule Date/Time</a></li>
										</ul>
										<button class="btn btn-primary btn-md"type="button"
												  data-toggle="modal" data-target="#myModal">
											Delete
										</button>
									</div>
								</div>
							</div>
						</div>



							<div class="listing clearfix panel panel-default">
								<div class="panel-heading">
									<h4 class="listing-title">
										Tweet title here
									</h4>
								</div>
								<div class="panel-body">
									<p class="listing-text">
										Tweet text here.
									</p>

									<div class="panel-offer">
										<div class="panel-offer">
											<button class="btn btn-primary btn-md" type="button"
													  data-toggle="modal" data-target="#myModal">
												Edit
											</button>
											<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Schedule
												<span class="caret"></span></button>
											<ul class="dropdown-menu">
												<li><a href="#">Tweet Now</a></li>
												<li><a href="#">Schedule Date/Time</a></li>
											</ul>
											<button class="btn btn-primary btn-md"type="button"
													  data-toggle="modal" data-target="#myModal">
												Delete
											</button>
										</div>
									</div>
								</div>
							</div>



							<div class="listing clearfix panel panel-default">
								<div class="panel-heading">
									<h4 class="listing-title">
										Tweet title here
									</h4>
								</div>
								<div class="panel-body">
									<p class="listing-text">
										Tweet text here.
									</p>

									<div class="panel-offer">
										<div class="panel-offer">
											<button class="btn btn-primary btn-md" type="button"
													  data-toggle="modal" data-target="#myModal">
												Edit
											</button>
											<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Schedule
												<span class="caret"></span></button>
											<ul class="dropdown-menu">
												<li><a href="#">Tweet Now</a></li>
												<li><a href="#">Schedule Date/Time</a></li>
											</ul>
											<button class="btn btn-primary btn-md"type="button"
													  data-toggle="modal" data-target="#myModal">
												Delete
											</button>
										</div>
									</div>
								</div>
							</div>



							<div class="listing clearfix panel panel-default">
								<div class="panel-heading">
									<h4 class="listing-title">
										Tweet title here
									</h4>
								</div>
								<div class="panel-body">
									<p class="listing-text">
										Tweet text here.
									</p>

									<div class="panel-offer">
										<div class="panel-offer">
											<button class="btn btn-primary btn-md" type="button"
													  data-toggle="modal" data-target="#myModal">
												Edit
											</button>
											<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Schedule
												<span class="caret"></span></button>
											<ul class="dropdown-menu">
												<li><a href="#">Tweet Now</a></li>
												<li><a href="#">Schedule Date/Time</a></li>
											</ul>
											<button class="btn btn-primary btn-md"type="button"
													  data-toggle="modal" data-target="#myModal">
												Delete
											</button>
										</div>
									</div>
								</div>
							</div>



							<div class="listing clearfix panel panel-default">
								<div class="panel-heading">
									<h4 class="listing-title">
										Tweet title here
									</h4>
								</div>
								<div class="panel-body">
									<p class="listing-text">
										Tweet text here.
									</p>

									<div class="panel-offer">
										<div class="panel-offer">
											<button class="btn btn-primary btn-md" type="button"
													  data-toggle="modal" data-target="#myModal">
												Edit
											</button>
											<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Schedule
												<span class="caret"></span></button>
											<ul class="dropdown-menu">
												<li><a href="#">Tweet Now</a></li>
												<li><a href="#">Schedule Date/Time</a></li>
											</ul>
											<button class="btn btn-primary btn-md"type="button"
													  data-toggle="modal" data-target="#myModal">
												Delete
											</button>
										</div>
									</div>
								</div>
							</div>



							<div class="listing clearfix panel panel-default">
								<div class="panel-heading">
									<h4 class="listing-title">
										Tweet title here
									</h4>
								</div>
								<div class="panel-body">
									<p class="listing-text">
										Tweet text here.
									</p>

									<div class="panel-offer">
										<div class="panel-offer">
											<button class="btn btn-primary btn-md" type="button"
													  data-toggle="modal" data-target="#myModal">
												Edit
											</button>
											<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Schedule
												<span class="caret"></span></button>
											<ul class="dropdown-menu">
												<li><a href="#">Tweet Now</a></li>
												<li><a href="#">Schedule Date/Time</a></li>
											</ul>
											<button class="btn btn-primary btn-md"type="button"
													  data-toggle="modal" data-target="#myModal">
												Delete
											</button>
										</div>
									</div>
								</div>
							</div>



							<div class="listing clearfix panel panel-default">
								<div class="panel-heading">
									<h4 class="listing-title">
										Tweet title here
									</h4>
								</div>
								<div class="panel-body">
									<p class="listing-text">
										Tweet text here.
									</p>

									<div class="panel-offer">
										<div class="panel-offer">
											<button class="btn btn-primary btn-md" type="button"
													  data-toggle="modal" data-target="#myModal">
												Edit
											</button>
											<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Schedule
												<span class="caret"></span></button>
											<ul class="dropdown-menu">
												<li><a href="#">Tweet Now</a></li>
												<li><a href="#">Schedule Date/Time</a></li>
											</ul>
											<button class="btn btn-primary btn-md"type="button"
													  data-toggle="modal" data-target="#myModal">
												Delete
											</button>
										</div>
									</div>
								</div>
							</div>



							<div class="listing clearfix panel panel-default">
								<div class="panel-heading">
									<h4 class="listing-title">
										Tweet title here
									</h4>
								</div>
								<div class="panel-body">
									<p class="listing-text">
										Tweet text here.
									</p>

									<div class="panel-offer">
										<div class="panel-offer">
											<button class="btn btn-primary btn-md" type="button"
													  data-toggle="modal" data-target="#myModal">
												Edit
											</button>
											<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Schedule
												<span class="caret"></span></button>
											<ul class="dropdown-menu">
												<li><a href="#">Tweet Now</a></li>
												<li><a href="#">Schedule Date/Time</a></li>
											</ul>
											<button class="btn btn-primary btn-md"type="button"
													  data-toggle="modal" data-target="#myModal">
												Delete
											</button>
										</div>
									</div>
								</div>
							</div>



							<div class="listing clearfix panel panel-default">
								<div class="panel-heading">
									<h4 class="listing-title">
										Tweet title here
									</h4>
								</div>
								<div class="panel-body">
									<p class="listing-text">
										Tweet text here.
									</p>

									<div class="panel-offer">
										<div class="panel-offer">
											<button class="btn btn-primary btn-md" type="button"
													  data-toggle="modal" data-target="#myModal">
												Edit
											</button>
											<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Schedule
												<span class="caret"></span></button>
											<ul class="dropdown-menu">
												<li><a href="#">Tweet Now</a></li>
												<li><a href="#">Schedule Date/Time</a></li>
											</ul>
											<button class="btn btn-primary btn-md"type="button"
													  data-toggle="modal" data-target="#myModal">
												Delete
											</button>
										</div>
									</div>
								</div>
							</div>



							<div class="listing clearfix panel panel-default">
								<div class="panel-heading">
									<h4 class="listing-title">
										Tweet title here
									</h4>
								</div>
								<div class="panel-body">
									<p class="listing-text">
										Tweet text here.
									</p>

									<div class="panel-offer">
										<div class="panel-offer">
											<button class="btn btn-primary btn-md" type="button"
													  data-toggle="modal" data-target="#myModal">
												Edit
											</button>
											<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Schedule
												<span class="caret"></span></button>
											<ul class="dropdown-menu">
												<li><a href="#">Tweet Now</a></li>
												<li><a href="#">Schedule Date/Time</a></li>
											</ul>
											<button class="btn btn-primary btn-md"type="button"
													  data-toggle="modal" data-target="#myModal">
												Delete
											</button>
										</div>
									</div>
								</div>
							</div>



							<div class="listing clearfix panel panel-default">
								<div class="panel-heading">
									<h4 class="listing-title">
										Tweet title here
									</h4>
								</div>
								<div class="panel-body">
									<p class="listing-text">
										Tweet text here.
									</p>

									<div class="panel-offer">
										<div class="panel-offer">
											<button class="btn btn-primary btn-md" type="button"
													  data-toggle="modal" data-target="#myModal">
												Edit
											</button>
											<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Schedule
												<span class="caret"></span></button>
											<ul class="dropdown-menu">
												<li><a href="#">Tweet Now</a></li>
												<li><a href="#">Schedule Date/Time</a></li>
											</ul>
											<button class="btn btn-primary btn-md"type="button"
													  data-toggle="modal" data-target="#myModal">
												Delete
											</button>
										</div>
									</div>
								</div>
							</div>



							<div class="listing clearfix panel panel-default">
								<div class="panel-heading">
									<h4 class="listing-title">
										Tweet title here
									</h4>
								</div>
								<div class="panel-body">
									<p class="listing-text">
										Tweet text here.
									</p>

									<div class="panel-offer">
										<div class="panel-offer">
											<button class="btn btn-primary btn-md" type="button"
													  data-toggle="modal" data-target="#myModal">
												Edit
											</button>
											<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Schedule
												<span class="caret"></span></button>
											<ul class="dropdown-menu">
												<li><a href="#">Tweet Now</a></li>
												<li><a href="#">Schedule Date/Time</a></li>
											</ul>
											<button class="btn btn-primary btn-md"type="button"
													  data-toggle="modal" data-target="#myModal">
												Delete
											</button>
										</div>
									</div>
								</div>
							</div>

				<!--.sfooter-content-->

				<footer class="footer navbar-fixed-bottom">
					<div class="container" id="foot">
						<a href="#">About </a>&nbsp;
						<a href="#">FAQ </a>&nbsp;
						<a href="#">Contact Us</a>
					</div>
				</footer>
	</body>
</html>