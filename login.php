<!DOCTYPE html>
<html>
<head>
	<script language="javascript" type="text/javascript">
		window.history.forward();
	</script>

	<title>Library Management System</title>
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
	/*background: url(pic2.jpg);*/
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
	padding: 70px 30px;
	border-radius: 10px;
}

.Logo{
	width: 100px;
	height: 90px;
	border-radius: 20%;
	position: absolute;
	top: -50px;
	left: 35%;
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

.Loginbox input[type="submit"]
{
	border: none;
	outline: none;
	height: 40px;
	background: #fb2525;
	color: #fff;
	font-size: 18px;
	border-radius: 20px;
}

.Loginbox input[type="submit"]:hover
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
	  			background-color:#cc99ff;
	  			padding: 50px;
	  			opacity: 0.7;
	  			width: 300px;
	  			height: 450px;
  		        }

	</style>
</head>
<body>
<ul class="topnav">
	<h2>Library Management System</h2>
  <a href="admin/index.php">Admin Login</a>
  <a href="signup.php">Register</a>
</ul>

	<h2><span style="color: white"><marquee behavior="scroll" direction="left"
           onmouseover="this.stop();"
           onmouseout="this.start();"><b>This is library Management System. Library opens at 8:00 AM and close at 8:00 PM</b></marquee></span></h2><br><br>

		<div class="col-md-4" id="side_bar">
			<h4>Library Timing</h4>
		        <h5>- Opening Timing: 8:00 AM</h5>
				<h5>- Closing Timing: 8:00 PM</h5>
				<h5>- (Friday off)</h5>
			<br>
			<h4>What we provide ?</h4>
		        <p>Full furniture,  Free Wi-fi,  News Papers,  Discussion Room,  NO Water,  Peacefull Environment</p>
		</div> 

		<div class="Loginbox" >
          <h2>User Login</h2><br><br>
			<form action="" method="post">
				<div class="form-group">
					<label for="name">Email ID:</label>
					<input type="text" name="email" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="name">Password:</label>
					<input type="password" name="password" class="form-control" required>
				</div>
				<div style="width: 100%">
				<button type="submit" name="login" style="font-size: 18px;">Login</button>
				</div>
			</form>

			<?php
							session_start();
							if(isset($_POST['login'])){
								$connection = mysqli_connect("localhost","root","");
								$db = mysqli_select_db($connection,"test");
								$query = "select * from users where email = '$_POST[email]'";
								$query_run = mysqli_query($connection,$query);

								while($row = mysqli_fetch_assoc($query_run)){
									if($row['email'] == $_POST['email']){
										if($row['password'] == $_POST['password']){
											$_SESSION['name'] = $row['name'];
											$_SESSION['email'] = $row['email'];
											$_SESSION['id'] = $row['uid'];
											header("Location:user_dashboard.php");
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
