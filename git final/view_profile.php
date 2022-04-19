<?php
	session_start();
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"test");
	$name = "";
	$email = "";
	$mobile = "";
	$query = "select * from users where email = '$_SESSION[email]'"; 
	$query_run = mysqli_query($connection,$query);
	while($row = mysqli_fetch_assoc($query_run)){
		$name = $row['name'];
    $username = $row['username'];
		$email = $row['email'];
		$mobile = $row['mobile'];
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Dashboard</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

  	<style type="text/css">
  		*{
		  margin: 0;
		  padding: 0;
		  -webkit-box-sizing: border-box;
		  -moz-box-sizing: border-box;
		  box-sizing: border-box;
		}
		body{
		  margin: 0;
		  padding: 0;
		  background: url(pic2.jpg);
		  background-size: 100%;
		  background-position: center;
		  font-family: sans-serif;
		}
		.Loginbox{
			width: 350px;
			height: 440px;
			background: gray;
			color: black;
			top: 55%;
			left: 50%;
			position: absolute;
			transform: translate(-50%,-50%);
			box-sizing: border-box;
			padding: 70px 30px;
			border-radius: 10px;
			opacity: 0.9;
		}

		
		h1{
			
			margin: 0;
			padding: 0 0 8px;
			text-align: center;
			font-size: 22px;
		}

		.Loginbox p{
			margin: 0;
			padding: 0;
			font-weight: bold;
		}

		.Loginbox input{
			width: 100%;
			margin-bottom: 20px;
		}

		.Loginbox input[type="text"], input[type="password"]
		{
			border: none;
			background: transparent;
			outline: none;
			height: 20px;
			color: #fff;
			font-size: 16px;
		}

		.topnav {
		  overflow: hidden;
		  background-color: #66ffb3;
		}
		.topnav h2 {
		  float: left;
		  display: block;
		  color: black;
		  text-align: center;
		  padding: 14px 16px;
		  text-decoration: none;
		  font-size: 17px;
		}
		.topnav a {
		  float: left;
		  display: block;
		  color: black;
		  text-align: center;
		  padding: 14px 16px;
		  text-decoration: none;
		  font-size: 17px;
		}
		.topnav p {
		  float: right;
		  display: block;
		  color: black;
		  text-align: center;
		  padding: 14px 16px;
		  text-decoration: none;
		  font-size: 17px;
		}

		.topnav a:hover {
		  background-color: #ff9966;
		  color: black;
		}

		.topnav a.active {
		  background-color: #2196F3;
		  color: white;
		}

		.topnav input[type=text] {
		  float: right;
		  padding: 6px;
		  margin-top: 8px;
		  margin-right: 16px;
		  border: none;
		  font-size: 17px;
		}

		@media screen and (max-width: 600px) {
		  .topnav a, .topnav input[type=text] {
		    float: none;
		    display: block;
		    text-align: left;
		    width: 100%;
		    margin: 0;
		    padding: 14px;
		  }

		  .topnav input[type=text] {
		    border: 1px solid #ccc;

		  }
		}
		.back  {
		  overflow: hidden;
		  background-color: #99ffff;
		  float: left;
		  display: block;
		  color: black;
		  text-align: center;
		  padding: 6px 15px;
		  text-decoration: none;
		  font-size: 15px;
		  border-radius: 10px;
		}
		.back p:hover {
		  background-color: #ff9966;
		  color: black;
		}

		.back p.active {
		  background-color: #2196F3;
		  color: white;
		}
  		#side_bar{
  			background-color: whitesmoke;
  			padding: 50px;
  			width: 300px;
  			height: 450px;
  		}
  	</style>
</head>
<body>
	<div class="topnav">
		<h1 align="center" style="text-shadow: 1px 1px">Library Management System</h1>
	<div>
		<b style="text-shadow: 2px 2px whitesmoke"> <a href='logout.php' style="float: right;">* Logout *</a></b>
	</div>
	</div>
  <?php
     if(isset($_SESSION["name"]))
     {
        
          echo "<h1 align='center'>".$_SESSION["name"]."</h1>";

     }
     else
     {
          header('location:login.php');
     }
     ?>
     <h2><span style="color: black"><marquee behavior="scroll" direction="left"
				 onmouseover="this.stop();"
				 onmouseout="this.start();"><b>This is library Management System. Library opens at 8:00 AM and close at 8:00 PM</b></marquee></span></h2><br><br>

	<div class="row">
		<div class="col-md-4"></div>
		<div class="Loginbox">
			<form>
				<h2 style="text-shadow: 1px 1px">My Profile:</h2>
				<div class="form-group">
					<label>Name:</label>
					<input type="text" class="form-control" value="<?php echo $name;?>" disabled>
				</div>
        		<div >
					<label>User Name:</label>
					<input type="text" class="form-control" value="<?php echo $username;?>" disabled>
				</div>
				<div class="form-group">
					<label>Email:</label>
					<input type="text" class="form-control" value="<?php echo $email;?>" disabled>
				</div>
				<div class="form-group">
					<label>Mobile:</label>
					<input type="text" class="form-control" value="<?php echo $mobile;?>" disabled>
				</div>
				<div>
					<a class="" href="change_password.php">Change Password</a><br>
				</div>
				<div class="back">
				<p align='center'><a href='admin_dashboard.php'>Go Back</a></p>
				</div>
			</form>
		</div>
		<div class="col-md-4"></div>
	</div>
</body>
</html>
