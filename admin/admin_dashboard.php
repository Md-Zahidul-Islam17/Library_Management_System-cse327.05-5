<?php
	require('functions.php');
	session_start();
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
		  background: url(10.jpg);
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

		.Logo{
			width: 90px;
			height: 80px;
			border-radius: 20%;
			position: absolute;
			top: -3px;
			left: 36%;
		}

		.form-container {
		  max-width: 250px;
		  padding: 20px;
		  background-color: #ff80b3;
		  border-radius: 10px;
		  position: absolute;
		  transform: translate(-50%,-50%);
		  box-sizing: border-box;
		  top: 65%;
		  left: 10%;
		}
		.form-container a {
		  float: left;
		  display: block;
		  color: black;
		  text-align: center;
		  padding: 5px 25px;
		  text-decoration: none;
		  font-size: 10px;
		  background-color: #00bfff
		}

		.form-container a:hover {
		  background-color: #ff9966;
		  color: black;
		}

		.form-container a.active {
		  background-color: #2196F3;
		  color: red;
		}
		.form-containerr {
		  max-width: 250px;
		  padding: 20px;
		  background-color: #ff80b3;
		  border-radius: 10px;
		  position: absolute;
		  transform: translate(-50%,-50%);
		  box-sizing: border-box;
		  top: 65%;
		  left: 28%;
		}
		.form-containerr a {
		  float: left;
		  display: block;
		  color: black;
		  text-align: center;
		  padding: 5px 25px;
		  text-decoration: none;
		  font-size: 10px;
		  background-color: #00bfff;
		}

		.form-containerr a:hover {
		  background-color: #ff9966;
		  color: black;
		}

		.form-containerr a.active {
		  background-color: #2196F3;
		  color: white;
		}
		.form-container1 {
		  	max-width: 250px;
		 	padding: 20px;
		  	background-color: #ff80b3;
		  	border-radius: 10px;
		 	position: absolute;
			transform: translate(-50%,-50%);
			box-sizing: border-box;
		  	top: 65%;
			left: 46.5%;
		}
		.form-container1 a {
		  float: left;
		  display: block;
		  color: black;
		  text-align: center;
		  padding: 5px 25px;
		  text-decoration: none;
		  font-size: 10px;
		  background-color: #00bfff;
		}

		.form-container1 a:hover {
		  background-color: #ff9966;
		  color: black;
		}

		.form-container1 a.active {
		  background-color: #2196F3;
		  color: red;
		}
		.form-container2 {
		  	max-width: 250px;
		 	padding: 20px;
		  	background-color: #ff80b3;
		  	border-radius: 10px;
		 	position: absolute;
			transform: translate(-50%,-50%);
			box-sizing: border-box;
		  	top: 65%;
			left: 65.5%;
		}
		.form-container2 a {
		  float: left;
		  display: block;
		  color: black;
		  text-align: center;
		  padding: 5px 25px;
		  text-decoration: none;
		  font-size: 10px;
		  background-color: #00bfff;
		}

		.form-container2 a:hover {
		  background-color: #ff9966;
		  color: black;
		}

		.form-container2 a.active {
		  background-color: #2196F3;
		  color: red;
		}
		.form-containerr3 {
		  	max-width: 250px;
		 	padding: 20px;
		  	background-color: #ff80b3;
		 	position: absolute;
		 	border-radius: 10px;
			transform: translate(-50%,-50%);
			box-sizing: border-box;
		  	top: 65%;
			left: 83.5%;
		}
		.form-containerr3 a {
		  float: left;
		  display: block;
		  color: black;
		  text-align: center;
		  padding: 5px 25px;
		  text-decoration: none;
		  font-size: 10px;
		  background-color: #00bfff;
		}

		.form-containerr3 a:hover {
		  background-color: #ff9966;
		  color: black;
		}

		.form-containerr3 a.active {
		  background-color: #2196F3;
		  color: red;
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
	<div class="Loginbox">
		<div ><img src="propic.png" class="Logo"></div>
  <?php
     if(isset($_SESSION["name"]))
     {

         echo "<h1 align='center'>".$_SESSION["name"]."</h1>";
				 echo "<p align='center'><a href='view_profile.php'>View Profile</a></p>";
				 echo "<p align='center'><a href='change_password.php'>Change Password</a></p>";

     }
     else
     {
          header('location:login.php');
     }
     ?></div>
<div class="topnav">

				<h2 style="text-shadow: 1px 1px">Book Management:</h2>
				<div>
					<a href="view_book.php" >View Books Details</a>
				</div>

				<a href="issue_book.php" >Issue Book</a>
			    <div>
		       <b style="text-shadow: 2px 2px whitesmoke"> <a href='logout.php' style="float: right;">* Logout *</a></b>
		        </div>
	</div>

<h2><span style="color: white"><marquee behavior="scroll" direction="left"
				 onmouseover="this.stop();"
				 onmouseout="this.start();"><b>This is library Management System. Library opens at 8:00 AM and close at 8:00 PM</b></marquee></span></h2><br><br>

	<div class="row">
		<div class="form-container">
				<div ><b style="text-shadow: 2px 2px lightblue">Registered Students</b></div><br>
				<div class="card-body">
					<p class="card-text">No. of total students: <?php echo get_user_count();?></p><br>
					<a href="registered_student_list.php" class="btn btn-danger" target="_blank">View Registered Students</a>
				</div>
			</div>
		</div>
		<div >
			<div class="form-containerr">
				<div><b style="text-shadow: 2px 2px lightblue">Registered Books</b></div><br>

				<div class="card-body">
					<p class="card-text">No. of availbale books: <?php echo get_book_count();?></p><br>
					<a href="registered_book_list.php" class="btn btn-primary" target="_blank">View Registered Books</a>
				</div>
			</div>
		</div>
		<div >
			<div class="form-container1" >
				<div ><b style="text-shadow: 2px 2px lightblue">Registered Category</b></div><br>
				<div class="card-body">
					<p class="card-text">No. of book's category: <?php echo get_category_count();?></p><br>
					<a href="registered_cat_list.php" class="btn btn-info" target="_blank">View Categories</a>
				</div>
			</div>
		</div>
		<div >
			<div class="form-container2" >
				<div ><b style="text-shadow: 2px 2px lightblue">Registered Authors</b></div><br>
				<div class="card-body">
					<p class="card-text">No. of availbale authors: <?php echo get_author_count();?></p><br>
					<a href="registered_auth_list.php" target="_blank">View Authors</a>
				</div>
			</div>
		</div>
		<div >
			<div class="form-containerr3" >
				<div><b style="text-shadow: 2px 2px lightblue">Issued Books &nbsp&nbsp</b></div><br>
				<div class="card-body">
					<p class="card-text">No. Issued Books: <?php echo get_issued_book_count();?></p><br>
					<a href="registered_issued_book_view.php" target="_blank">View Issued books</a>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
<script>
 $(document).ready(function(){
       function check_session()
       {
          $.ajax({
            url:"check_session.php",
            method:"POST",
            success:function(data)
            {
              if(data == '1')
              {
                alert('Your session has been expired!');
                window.location.href="index.php";
              }
            }
          })
       }
        setInterval(function(){
          check_session();
        }, 10000);  //10000 means 10 seconds
 });
 </script>
