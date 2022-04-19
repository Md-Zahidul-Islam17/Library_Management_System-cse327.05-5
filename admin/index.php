<!DOCTYPE html>
<html>
<head>
	<script language="javascript" type="text/javascript">
		window.history.forward();
	</script>
	<title>Admin Login Page</title>
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

		.topnav {
		  overflow: hidden;
		  background-color: #66ffb3;
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

		.Loginbox{
			width: 340px;
			height: 400px;
			background: #ffb3b3;
			color: black;
			top: 50%;
			left: 50%;
			position: absolute;
			transform: translate(-50%,-50%);
			box-sizing: border-box;
			padding: 50px 30px;
			border-radius: 10px;
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
			border-bottom: 1px solid #fff;
			background: transparent;
			outline: none;
			height: 40px;
			color: #fff;
			font-size: 16px;
		}

		.Loginbox button[type="submit"]
		{
			width: 100%;
			margin-bottom: 20px;
			border: none;
			outline: none;
			height: 40px;
			background: #fb2525;
			color: #fff;
			font-size: 18px;
			border-radius: 20px;
		}

		.Loginbox button[type="submit"]:hover
		{
			cursor: pointer;
			background: #ffc107;
			color: #000;
		}

		.Loginbox a{
			text-decoration: none;
			font-size: 12px;
			line-height: 20px;
			color:darkgray;
		}

		.Loginbox a:hover
		{
			color: #ffc107;
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
			<div >
				<h2 align="center" style="text-shadow: 1px 1px"><b>Library Management System</b></h2>
			</div>
			
					<a href="../index.php">Library Management System</a>	
					<a href="../login.php">User Login</a>
				
					<a href="../signup.php">Register</a>
				
			
		</div><br>
	<h2><span style="color: black"><marquee behavior="scroll" direction="left"
           onmouseover="this.stop();"
           onmouseout="this.start();"><b>This is library Management System. Library opens at 8:00 AM and close at 8:00 PM</b></marquee></span></h2><br><br>

		<div class="Loginbox">
			<h1>Admin Login Form</h1><br><br>
			<form  action="" method="post">
				<div>
					<label for="name">Email ID:</label>
					<input type="text" name="email" class="form-control" required>
				</div>
				<div>
					<label for="name">Password:</label>
					<input type="password" name="password" class="form-control" required>
				</div><br>
				<button type="submit" name="login">Login</button>
			</form>


			<?php
				session_start();
				if(isset($_POST['login'])){
					$connection = mysqli_connect("localhost","root","");
					$db = mysqli_select_db($connection,"test");
					$query = "select * from users where uid=1";
					$query_run = mysqli_query($connection,$query);
					while($row = mysqli_fetch_assoc($query_run)){
						if($row['email'] != $_POST['email']){
                echo '<script type="text/javascript">alert("Invalid Admin!")</script>';
              } else {
                if($row['password'] == $_POST['password']){
                  $_SESSION['name'] = $row['name'];
								  $_SESSION['email'] = $row['email'];
								  header("Location:admin_dashboard.php");
							}
							else{
								?>
								<br><br><center><span class="alert-danger">Wrong Password</span></center>
								<?php
							}
						}
					}
				}
			?>

	</div>
</body>
</html>
