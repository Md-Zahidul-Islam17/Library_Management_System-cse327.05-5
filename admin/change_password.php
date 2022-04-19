<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Dashboard</title> 
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
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
			width: 340px;
			height: 200px;
			background: #9999ff;
			color: black;
			top: 35%;
			left: 50%;
			position: absolute;
			transform: translate(-50%,-50%);
			box-sizing: border-box;
			padding: 70px 30px;
			border-radius: 10px;
			opacity: 0.9;
		}
		.box{
			width: 340px;
			height: 200px;
			background: gray;
			color: black;
			top: 70%;
			left: 50%;
			position: absolute;
			transform: translate(-50%,-50%);
			box-sizing: border-box;
			padding: 70px 30px;
			border-radius: 10px;
			opacity: 0.9;
		}

		.Logo{
			width: 90px;
			height: 80px;
			border-radius: 20%;
			position: absolute;
			top: -3px;
			left: 36%;
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
  		#side_bar{
  			background-color: whitesmoke;
  			padding: 50px;
  			width: 300px;
  			height: 450px;
  		}
  	</style>
</head>
<body>
	<div class="topnav"><h1 align="center" style="text-shadow: 1px 1px">Library Management System</h1></div>
	
        <div class="topnav">
		<b style="text-shadow: 2px 2px whitesmoke"> <a href='logout.php' style="float: right;">* Logout *</a></b>
	</div>
	</div>
	<div class="Loginbox">
		<div ><img src="propic.png" class="Logo"></div>
	<?php
		 if(isset($_SESSION["name"]))
		 {
				 echo "<h1 align='center'>".$_SESSION["name"]."</h1>";
				 echo "<p align='center'><a href='view_profile.php'>View Profile</a></p>";
				 echo "<p align='center'><a href='change_password.php'>Change Password</a></p>";
				 echo "<p align='center'><a href='logout.php'>Logout</a></p>";
		 }
		 else
		 {
					header('location:login.php');
		 }
		 ?>
		</div>

	<div >
		<div ></div>
		<div class="box">
			<form align="center" action="update_password(admin).php" method="post">
				<div class="form-group">
					<label>Enter Current Password:</label>
					<input type="password" name="old_password" class="form-control">
				</div>
				<div class="form-group">
					<label>Enter New Password:</label>
					<input type="password" name="new_password" class="form-control">
				</div><br>
				<button type="submit" name="update" class="btn btn-primary">Update Password</button>
			</form>
		</div>
		<div class="col-md-4"></div>
	</div>
</body>
</html>
