<!DOCTYPE html>
<html>
<head>
	<title>Index Page</title>
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
	  			background-color:#cc99ff;
	  			padding: 50px;
	  			opacity: 0.7;
	  			width: 300px;
	  			height: 450px;
  		        }
  	</style>
</head>
<body>

		<div class="topnav">
			<div class="navbar-header">
				<a class="navbar-brand" href="admin/index.php">Library Management System</a>
			</div>
			
					<a class="nav-link" href="admin/index.php">Admin Login</a>
				
					<a class="nav-link" href="login.php">User Login</a>
				
					<a class="nav-link" href="signup.php">Register</a>
				
		</div>
	<br>
	<span><marquee>This is library Management System. Library opens at 8:00 AM and close at 8:00 PM</marquee></span><br><br>
	<div class="row">
		<div class="col-md-4" id="side_bar">
			<h5>Library Timing</h5>
			<ul>
				<li>Opening Timing: 8:00 AM</li>
				<li>Closing Timing: 8:00 PM</li>
				<li>(Friday off)</li>
			</ul>
			<h5>What we provide ?</h5>
			<ul>
				<li>Full furniture</li>
				<li>Free Wi-fi</li>
				<li>News Papers</li>
				<li>Discussion Room</li>
				<li>NO Water</li>
				<li>Peacefull Environment</li>
			</ul>
		</div>
	</div>
</body>
</html>
