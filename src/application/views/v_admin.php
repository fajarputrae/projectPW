<!DOCTYPE html>
<html>
<?php
if(!isset($this->session->userdata['logged_in'])){header('location:login');}
else {
	$username = ($this->session->userdata['logged_in']['username']);
	}
?>
    <head>
		<title>Admin Page</title>
		<link rel="icon" href="<?php echo base_url(); ?>static/img/logo.png" type="image/gif">
        <link href="<?php echo base_url(); ?>static/css/login.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700,900" rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
		<div id="profile">
		<?php
			echo "Hello <b id='welcome'><i>" . $username . "</i> !</b>";
			echo "<br/>";
			echo "<br/>";
			echo "Welcome to Admin Page";
			echo "<br/>";
			echo "<br/>";
			echo "Your Username is " . $username;
			echo "<br/>";
		?>
			<b id="logout"><a href="logout">Logout</a></b>
		</div>
	</body>
</html>