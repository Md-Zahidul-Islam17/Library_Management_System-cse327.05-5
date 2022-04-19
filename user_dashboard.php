<?php
	session_start();
	function get_user_issue_book_count(){
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"test");
		$user_issue_book_count = 0;
		$query = "select count(*) as user_issue_book_count from issued_books where student_id = $_SESSION[id]";
		$query_run = mysqli_query($connection,$query);
		while($row = mysqli_fetch_assoc($query_run)){
			$user_issue_book_count = $row['user_issue_book_count'];
	}
	return($user_issue_book_count);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>User Dashboard</title>
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
		  left: 50%;
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

         echo "<h3 align='center'>Welcome: ".$_SESSION["name"]."<br> Email: ".$_SESSION["email"]."</h3>";
         echo "<p align='center'><a href='view_user_profile.php'>View Profile</a></p>";
         echo "<p align='center'><a href='change_user_password.php'>Change Password</a></p>";

     }
     else
     {
          header('location:login.php');
     }
     ?></div>

				<div class="topnav"> 
					<a href="search.php">Search books...</a>
				<div>
		       <b style="text-shadow: 2px 2px whitesmoke"> <a href='logout.php' style="float: right;">* Logout *</a></b>
		        </div>
				</div>
				<h2><span style="color: white"><marquee behavior="scroll" direction="left"
	 					 onmouseover="this.stop();"
	 					 onmouseout="this.start();"><b>This is library Management System. Library opens at 8:00 AM and close at 8:00 PM</b></marquee></span></h2>



 <div class="row">
		<div class="form-container">
			<div><b style="text-shadow: 2px 2px lightblue">Issue Books</b></div><br>
				<div class="card-body">
					<p class="card-text">No. of Books I issued : <?php echo get_user_issue_book_count();?> </p>
					<a href="user_view_issued_book.php"  target="_blank">View Issued Books</a>
				</div>
			</div>
		</div>
		<div class="col-md-3"></div>
		<div class="col-md-3"></div>
		<div class="col-md-3"></div>
	</div>
</body>
</html>
<script>
 $(document).ready(function(){
       function check_session()
       {
          $.ajax({
            url:"check_user_session.php",
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
