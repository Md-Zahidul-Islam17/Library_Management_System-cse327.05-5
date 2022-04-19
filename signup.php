<!DOCTYPE html>
<html>
<head>
	<title>Sign Up Page</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<script src="Signupvalidation.js"></script>
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
			height: 520px;
			background: #ffb3b3;
			color: black;
			top: 55%;
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
			left: 35%; /*ok*/
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
			height: 20px;
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
				color: black;
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
	  <h2><b>Library Managment System</b></h2>
	  <a href="admin/index.php">Admin Login</a>
	  <a href="login.php">User Login</a>
	</ul>


<h2><span style="color: black"><marquee behavior="scroll" direction="left"
           onmouseover="this.stop();"
           onmouseout="this.start();"><b>This is library Management System. Library opens at 8:00 AM and close at 8:00 PM</b></marquee></span></h2><br>
	<div>
		<div class="col-md-4" id="side_bar">
			<h4>Library Timing</h4>
		        <h5>- Opening Timing: 8:00 AM</h5>
				<h5>- Closing Timing: 8:00 PM</h5>
				<h5>- (Sunday off)</h5>
			<br>
			<h4>What we provide ?</h4>
		        <p>Full furniture,  Free Wi-fi,  News Papers,  Discussion Room,  RO Water,  Peacefull Environment</p>
		</div>

<div class="Loginbox">
	      <h1>Sign Up</h1>
				<?php
            // Display Error message
            if(!empty($error_message)){
            ?>
            <div class="alert alert-danger">
              <strong>Error!</strong> <?= $error_message ?>
            </div>

            <?php
            }
            ?>

            <?php
            // Display Success message
            if(!empty($success_message)){
            ?>
            <div class="alert alert-success">
              <strong>Success!</strong> <?= $success_message ?>
            </div>

            <?php
            }
            ?>

	      <form name="form" method="post" onsubmit="return validate();">
	      	<label>Name</label><br><span id="nameError" style="color: red"></span>
		  			<input type="text"  name="namee" placeholder="Name"><br>
	      	<label>Username</label><br><span id="usernameError" style="color: red"></span>
		  			<input type="text" name="usernamee" placeholder="Username"><br>
		  		<label>Email</label><br><span id="emailError" style="color: red"></span>
		  			<input type="text" name="emaill" placeholder="Email"><br>
		  		<label>Password</label><br><span id="passwordError" style="color: red"></span>
		  	<input type="password" name="passwordd"  placeholder="Password"><br>
		  		<label>Contact No</label><br><span id="contactError" style="color: red"></span>
		  	<input type="text" name="mobilee"  placeholder="Contact no"><br>
		  	<input type="submit" name="submit" value="Sign Up">
		</form>
</div>
<?php
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "test";
			$error_message = "";
			$success_message = "";
			$conn = mysqli_connect($servername, $username, $password, $dbname);
			if (!$conn) {
			 die("Connection failed: " . mysqli_connect_error());
			}

			if(isset($_POST['submit'])){
				$Name = trim($_POST['namee']);
				$Username = trim($_POST['usernamee']);
				$Email = trim($_POST['emaill']);
				$Password = trim($_POST['passwordd']);
				$Mobile = trim($_POST['mobilee']);
				$isValid = true;

				if($Name == '' || $Username == '' || $Email == '' || $Password == '' || $Mobile == ''){
					$isValid = false;
				  $error_message = "Please fill all fields.";
				  }
					// Check if Email-ID is valid or not
	   		if($isValid && !filter_var($Email, FILTER_VALIDATE_EMAIL)){
					$isValid = false;
	     		$error_message = "Invalid Email-ID.";
	   		  }


	   		if($isValid){
					// Check if Email-ID already exists
		     	$stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
			    $stmt->bind_param("s", $Email);
			    $stmt->execute();
			    $result = $stmt->get_result();
			    $stmt->close();
			    if($result->num_rows > 0){
						$isValid = false;
	       		$error_message = "Email-ID is already existed.";
	     }

	   }
					// Insert records
				if($isValid){
					$insertSQL = "INSERT INTO users(name,username,email,password,mobile ) values(?,?,?,?,?)";
			     $stmt = $conn->prepare($insertSQL);
			     $stmt->bind_param("sssss",$Name,$Username,$Email,$Password,$Mobile);
			     $stmt->execute();
			     $stmt->close();
					 $success_message = "Account created successfully.";
   	 			}
				}

	?>



</body>
</html>
