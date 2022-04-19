<?php
	require('functions.php');
	session_start();
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"test");
	$book_name = "";
	$author = "";
	$book_no = "";
	$student_name = "";
	$query = "select issued_books.book_name,issued_books.book_author,users.name from issued_books left join users on issued_books.student_id = users.uid"; 
?>
<!DOCTYPE html>
<html>
<head>
	<title>registered Issued Book User List</title>
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
			background: url(8.jpg);
			background-size: 100%;
			background-position: center;
			font-family: sans-serif;
		}
		.box{
			width: 340px;
			height: 180px;
			background: #9999ff;
			color: black;
			top: 25%;
			left: 50%;
			position: absolute;
			transform: translate(-50%,-50%);
			box-sizing: border-box;
			padding: 5px 15px;
			border-radius: 10px;
			opacity: 0.9;
		}
		table {
			  width:30%;
			}
			table, th, td {
			  border: 1px solid black;
			  border-collapse: collapse;
			  background-color: #e6ffff;
			}
			th, td {
			  padding: 15px;
			  text-align: left;
			}
  		#side_bar{
  			background-color: whitesmoke;
  			padding: 50px;
  			width: 300px;
  			height: 450px;
  		}
		@media only screen and (max-width: 900px){
			form p{
				font-size: 20px;
			}
			form{
				width: 70%;
			}
		}

  	</style>
</head>
<body>
	<h1 align='center'><a href='admin_dashboard.php'>Library Management System</a></h1>
	<h2><span style="color: black"><marquee behavior="scroll" direction="left"
           onmouseover="this.stop();"
           onmouseout="this.start();"><b>This is library Management System. Library opens at 8:00 AM and close at 8:00 PM</b></marquee></span></h2><br><br>
	<div class="box">
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
		 ?></div>


<div class="row">
	<div class="col-md-2"></div><br><br><br><br><br><br><br><br>
	<div align="center" class="col-md-8">
		<form>
			<table class="table-bordered" width="400px" style="text-align: center">
				<tr>
					<th>Book Name:</th>
					<th>Author Name:</th>
					<th>Student Name:</th>
				</tr>
				<?php
					$query_run = mysqli_query($connection,$query);
					while($row = mysqli_fetch_assoc($query_run)){
						$book_name = $row['book_name'];
						$book_author = $row['book_author'];
						$student_name = $row['name'];
				?>
						<tr>
							<td><?php echo $book_name;?></td>
							<td><?php echo $book_author;?></td>
							<td><?php echo $student_name;?></td>
						</tr>
						<?php
					}
				?>
			</table>
		</form>
	</div>
	<div class="col-md-2"></div>
</div>

</body>
</html>
