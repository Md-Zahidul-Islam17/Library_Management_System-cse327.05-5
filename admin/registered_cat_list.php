<?php
	require('functions.php');
	session_start();
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"test");
	$cat_name = "";
	$query = "select DISTINCT cat_name from books";
?>
<!DOCTYPE html>
<html>
<head>
	<title>registered category list</title>
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
		background: url(5.jpg);
		background-size: 100%;
		background-position: center;
		font-family: sans-serif;
	}
		.box{
			width: 340px;
			height: 180px;
			background: #9999ff;
			color: black;
			top: 30%;
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
  			height: 400px;
  		}
  	</style>
</head>
<body>
	<div>

	<h1 align='center'><a href='admin_dashboard.php'>Library Management System</a></h1> <br>
	<h2><span style="color: black"><marquee behavior="scroll" direction="left"
           onmouseover="this.stop();"
           onmouseout="this.start();"><b>This is library Management System. Library opens at 8:00 AM and close at 8:00 PM</b></marquee></span></h2><br><br>
</div>
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
    <h3>Registered Categories</h3>
		<form>
			<table class="table-bordered" width="900px" style="text-align: center">
				<tr>
					<th>Category Type:</th>
				</tr>
				<?php
					$query_run = mysqli_query($connection,$query);
					while($row = mysqli_fetch_assoc($query_run)){
						$cat_name = $row['cat_name'];
				?>
						<tr>
							<td><?php echo $cat_name;?></td> 
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
