<!DOCTYPE html>

<html>
    <head>
		<title>Bandung Futsal Arena</title>
		<link rel="icon" href="<?php echo base_url(); ?>static/img/logo.png" type="image/gif">
        <link href="<?php echo base_url(); ?>static/css/style.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700,900" rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!--Grid from Materialize-->
		<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>static/css/materialize.min.css" media="screen,projection"/>
    </head>
    
    <body>
        <div class="navbar">
			<a href="http://localhost/CI_projek/src/index.php/BFA/home"><img src="<?php echo base_url(); ?>static/img/logo.png" class="logo"></a>	
            <ul>
				<li><a href="http://localhost/CI_projek/src/index.php/BFA/contact"><h4>Contact Us</h4></a></li>
                <li><a href="http://localhost/CI_projek/src/index.php/BFA/about"><h4>About</h4></a></li>
                <li><a class="active" href="#"><h4>Event</h4></a></li>
                <li><a href="http://localhost/CI_projek/src/index.php/BFA/category"><h4>Category</h4></a></li>
				<li><a href="http://localhost/CI_projek/src/index.php/BFA/home"><h4>Home</h4></a></li>
            </ul>
        </div>
     	<div class="container">
     	<div id="mainevent"> 
      		<img class="maingalleryevent" src="<?php echo base_url(); ?>static/img/PocariFutsal.jpg" alt="Pocari Sweat Futsal">

            <p class="maintextevent">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed finibus massa. Duis at purus sapien. Aenean neque lectus, faucibus at dolor vitae, congue elementum est. Nam pharetra magna tempus nisi venenatis pharetra. Fusce tincidunt hendrerit massa, at egestas ipsum vestibulum ut. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent in lectus erat. Aliquam id elit ut diam fermentum hendrerit. Suspendisse placerat quam venenatis convallis dapibus....
            </p> 
    	</div>

        <h4 class="headmore"> More Event and News </h4>
    	
        <div class="moregallery">
            <img src="<?php echo base_url(); ?>static/img/futsal1.jpg" alt="Tournament C-tra">
            <div class="moredesc">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            </div>
        </div>

        <div class="moregallery">
            <img src="<?php echo base_url(); ?>static/img/futsal2.jpg" alt="Tournament Queen">
            <div class="moredesc">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            </div>
        </div>
            </div>
    </body>
</html>