<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
	<title> Contact </title>
	<meta name="description" content="Scarica gratis il nostro Template HTML/CSS GARAGE. Se avete bisogno di un design per il vostro sito web GARAGE può fare per voi. Web Domus Italia">
	<meta name="author" content="Web Domus Italia">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="source/bootstrap-3.3.6-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="source/font-awesome-4.5.0/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/mystyle.css">
	<link rel="stylesheet" type="text/css" href="css/contactstyle.css">
	<script src="http://maps.googleapis.com/maps/api/js"></script>
<script>

var myCenter=new google.maps.LatLng(41.567197,14.681526);

function initialize()
{
var mapProp = {
  center:myCenter,
  zoom:16,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };

var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker=new google.maps.Marker({
  position:myCenter,
  });

marker.setMap(map);
}



</script>

<script src="js/jquery.js"></script>
<script src="js/myscript.js"></script>


<script>
	$(window).resize(function(){
		var new_height = $("#image_border").height();
		console.log(new_height);
		$("#googleMap").height(new_height);
	});

	$(window).load(function(){
		var new_height = $("#image_border").height();
		console.log(new_height);
		$("#googleMap").height(new_height);
		google.maps.event.addDomListener(window, 'load', initialize());
	});
	
</script>

  </head>
 
  <body>
   <div class="allcontain">
	<div class="header">
			<ul class="socialicon">
				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
				<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
			</ul>
			<ul class="givusacall">
				<li>Give us a call : +919877444777 </li>
			</ul>
	</div>
	<!-- Navbar Up -->
	<nav class="topnavbar navbar-default topnav">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed toggle-costume" data-toggle="collapse" data-target="#upmenu" aria-expanded="false">
					<span class="sr-only"> Toggle navigaion</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand logo" href="#"><img src="image/logo1.png" alt="logo"></a>
			</div>	 
		</div>
		<div class="collapse navbar-collapse" id="upmenu">
			<ul class="nav navbar-nav" id="navbarontop">
				<li class="active"><a href="{{ url('/home') }}">HOME</a> </li>
						
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">CONTACT </a>
				</li>
			</ul>
		</div>
	</nav>
</div>
 <div class="allcontain">
	<div id="carousel-up" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner " role="listbox">
			<div class="item active">
				<img src="image/oldcar.jpg" alt="oldcar">
				<div class="carousel-caption">
					<h2>Porsche 356</h2>
					<p>Lorem ipsum dolor sit amet, consectetur ,<br>
						sed do eiusmod tempor incididunt ut labore </p>
				</div>
			</div>
			<div class="item">
				<img src="image/porche.jpg" alt="porche">
				<div class="carousel-caption">
					<h2>Porche</h2>
						<p>Lorem ipsum dolor sit amet, consectetur ,<br>
						sed do eiusmod tempor incididunt ut labore </p>
				</div>
			</div>
			<div class="item">
				<img src="image/benz.jpg" alt="benz">
				<div class="carousel-caption">
					<h2>Car</h2>
					<p>Lorem ipsum dolor sit amet, consectetur ,<br>
						sed do eiusmod tempor incididunt ut labore </p>
				</div>
			</div>
		</div>
		
	</div>
</div>
<div class="allcontain">
	<div class="contact">
		<div class="newslettercontent">
			<div class="leftside">
				<img id="image_border" src="image/border.png" alt="border">
					<div class="contact-form">
						<h1>Contact Us</h1>
							<div class="form-group group-coustume">
								<input type="text" class="form-control name-form" placeholder="Name">
								<input type="text" class="form-control email-form" placeholder="E-mail">
								<input type="text" class="form-control subject-form" placeholder="Subject">
								<textarea rows="4" cols="50" class="message-form"></textarea>
								<button type="submit" class="btn btn-default btn-submit">Submit</button>
							</div>
					</div>
			</div>
			<div class="google-maps">
			 <div id="googleMap"></div>

			</div>
		</div>

	</div>
</div> 
  </body>
</html>