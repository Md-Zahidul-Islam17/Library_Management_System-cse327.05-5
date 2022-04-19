<?php
	require('functions.php');
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
		.box{
			width: 340px;
			height: 220px;
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
		.Loginbox{
		  width: 340px;
		  height: 220px;
		  background: gray;
		  color: black;
		  top: 70%;
		  left: 50%;
		  position: absolute;
		  transform: translate(-50%,-50%);
		  box-sizing: border-box;
		  padding: 50px 30px;
		  border-radius: 10px;
		  opacity: 0.97;
		}


		h2{
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
		.Loginbox button[type="button"]
		{
		  width: 100%;
		  margin-bottom: 20px;
		  border: none;
		  outline: none;
		  height: 30px;
		  background: #00cc99;
		  color: #fff;
		  font-size: 18px;
		  border-radius: 20px;
		}
		.Loginbox button[type="button"]:hover
		{
		  cursor: pointer;
		  background: red;
		  color: #000;
		}

		.Loginbox a{
		  text-decoration: none;
		  font-size: 18px;
		  line-height: 20px;
		  color:white;
		}

		.Loginbox a:hover
		{
		  color: #ffc107;
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
	<div class="topnav">
		<h1 align="center" style="text-shadow: 1px 1px">Library Management System</h1>
	<div>
		<b style="text-shadow: 2px 2px whitesmoke"> <a href='logout.php' style="float: right;">* Logout *</a></b>
	</div>
	</div>
	<div class="box">
		<div ><img src="propic.png" class="Logo"></div>
	<?php
     if(isset($_SESSION["name"]))
     {

         echo "<h1 align='center'>".$_SESSION["name"]."</h1>";
				 echo "<p align='center'><a href='view_profile.php'>View Profile</a></p>";
				 echo "<p align='center'><a href='change_password.php'>Change Password</a></p>";
         //echo "<p align='center'><a href='logout.php'>Logout</a></p>";
     }
     else
     {
          header('location:login.php');
     }
     ?>
     </div>
	<h2><span style="color: black"><marquee behavior="scroll" direction="left"
           onmouseover="this.stop();"
           onmouseout="this.start();"><b>This is library Management System. Library opens at 8:00 AM and close at 8:00 PM</b></marquee></span></h2><br><br>
	<div class="Loginbox" >
		<div >
			<form action="" method="post">
				<div class="form-group">
					<label>Book Name:</label>
					<select class="form-control" name="book_name">
						<option>-Select Book-</option>
					<?php
						$connection = mysqli_connect("localhost","root","");
						$db = mysqli_select_db($connection,"test");
						$query = "select book_name from books";
						$query_run = mysqli_query($connection,$query);
						while($row = mysqli_fetch_assoc($query_run)){
							?>
							<option><?php echo $row['book_name'];?></option>
							<?php
						}
					?>
				</select>


				<div class="form-group">
					<label>Book Author:</label>
					<select class="form-control" name="book_author">
						<option>-Select author-</option>
						<?php
							$connection = mysqli_connect("localhost","root","");
							$db = mysqli_select_db($connection,"test");
							$query = "select author_name from books";
							$query_run = mysqli_query($connection,$query);
							while($row = mysqli_fetch_assoc($query_run)){
								?>
								<option><?php echo $row['author_name'];?></option>
								<?php
							}
						?>
					</select>
				<div class="form-group">
					<label>Student ID:</label>
					<select class="form-control" name="student_id">
						<option>-Select Student-</option>
						<?php
							$connection = mysqli_connect("localhost","root","");
							$db = mysqli_select_db($connection,"test");
							$query = "select DISTINCT student_id from issued_books";
							// $query = "SELECT users.name AS namee FROM issued_books left join users on issued_books.student_id = users.uid";

							$query_run = mysqli_query($connection,$query);
							while($row = mysqli_fetch_assoc($query_run)){
								?>
								<option><?php echo $row['student_id'];?></option>
								<?php
							}
						?>
						</select>

				<div class="form-group">
					<label>Issue Date:</label>
					<input type="text" name="issue_date" class="form-control" value="<?php echo date("yy-m-d");?>" required="">
				</div>
				</div>
				</div>
				</div>
				<button  name="issue_book" style="background-color: lightblue">Issue Book</button>
				<button name="back" style="background-color: blue"> <a href="admin_dashboard.php">Back</a></button>
			</form>
		</div>
		<div class="col-md-4"></div>
	</div>
</body>
</html>

<?php
	if(isset($_POST['issue_book'])){
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"test");
		$query = "insert into issued_books values(null,'$_POST[book_name]','$_POST[book_author]','$_POST[student_id]',1,'$_POST[issue_date]')";
		$query_run = mysqli_query($connection,$query);
		echo '<script type="text/javascript">alert("Book Issued Successfully!!")</script>';
	}
?>
