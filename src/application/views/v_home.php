<!DOCTYPE html>

<html>
    <head>
		<title>Bandung Futsal Arena</title>
		<link rel="icon" href="<?php echo base_url(); ?>static/img/logo.png" type="image/gif">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>static/css/slideshow.css">
		<link href="<?php echo base_url(); ?>static/css/style.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700,900" rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!--Grid from Materialize-->
		<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>static/css/materialize.min.css" media="screen,projection"/>
    </head>
   
    <body>
        <ul class="cb-slideshow">
            <li><span></span></li>
            <li><span></span></li>
            <li><span></span></li>
            <li><span></span></li>
        </ul>
        <div class="navbar">
			<a href="<?php echo base_url(); ?>BFA/home"><img src="<?php echo base_url(); ?>static/img/logo.png" class="logo"></a>
            <ul>
                <li><a href="<?php echo base_url(); ?>BFA/contact"><h4>Contact Us</h4></a></li>
                <li><a href="<?php echo base_url(); ?>BFA/about"><h4>About</h4></a></li>
                <li><a href="<?php echo base_url(); ?>BFA/event"><h4>Event</h4></a></li>
                <li><a href="<?php echo base_url(); ?>BFA/category"><h4>Category</h4></a></li>
                <li><a class="active" href="#"><h4>Home</h4></a></li>
            </ul>
        </div>
        <div class="container">
			<div class="row">
				<div class="col s12">
					<div class="isi">
						<h1>BANDUNG FUTSAL ARENA</h1>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col s12 m4 l2"></div>
				<div class="col s12 m4 l8">
				<form action="search-result.html">
					<div class="search-box-wrapper">
						<input type="text" placeholder="Search..." class="search-box-input">
					</div>
				</div>
				<div class="col s12 m4 l2">
					<button type="submit" class="search-box-button">&#128269;</button>
				</div>
				</form>
			</div>
			<div class="row">
				<div class="col s12">
					<div class="kata">
						<h2>Find Futsal Field in <span style="font-weight: 400">Bandung Raya</span></h2>
					</div>
				</div>
			</div>
		</div>
    </body>
</html>