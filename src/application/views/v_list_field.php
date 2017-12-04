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
			<a href="<?php echo base_url(); ?>BFA/home"><img src="<?php echo base_url(); ?>static/img/logo.png" class="logo"></a>
            <ul>
                <li><a href="<?php echo base_url(); ?>BFA/contact"><h4>Contact Us</h4></a></li>
                <li><a href="<?php echo base_url(); ?>BFA/about"><h4>About</h4></a></li>
                <li><a href="<?php echo base_url(); ?>BFA/event"><h4>Event</h4></a></li>
                <li><a href="<?php echo base_url(); ?>BFA/category"><h4>Category</h4></a></li>
                <li><a class="active" href="<?php echo base_url(); ?>BFA/home"><h4>Home</h4></a></li>
            </ul>
        </div>
        
        <div class="container">
			<div class="row" style="margin-top: 15px">
				<div class="col s12">
				<?php foreach($response as $data){} ?>
				<p class="dicari"><?php echo $data['c_name'] ?> Field : </p>
				</div>
			</div>
			<div class="row">
			<?php foreach($response as $data){ ?>
				<div class="col s12 m6 l6">
					<div class="result-stacked">
						<div class="result2">
							<div class="result-image">
								<img src="<?php echo base_url(); ?>static/img/<?php echo $data['img'] ?>">
							</div>
							<div class="result-content">
								<div class="result-title"><?php echo $data['f_name'] ?></div>
								<div><p><?php echo $data['address'] ?></p></div>
							</div>
							<div class="result-detail">
								<hr class="hr_result">
								<div>
									<p>Lapangan : <?php echo $data['c_name'] ?></p>
									<p>Harga Normal : <?php echo $data['price'] ?> / jam</p>
									<p>Jam operasi : 0<?php echo $data['open_hour'] ?>:00 - <?php echo $data['close_hour'] ?>:00</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php } ?>
			</div>
		</div>
    </body>
</html>