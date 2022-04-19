<?php
	session_start();
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"test");
	$book_name = "";
	$author = "";
  $issue_date = "";
	$query = "select book_name,book_author,issue_date from issued_books where student_id = $_SESSION[id] and status = 1";
?>
<!DOCTYPE html>
<html>
<head>
	<title>User Dashboard</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1"> 
  	<style type="text/css">
  		body{
			background-color: gray;
			background-size:100%;
		}
  		table {
 			  width:100%;
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
  	</style>
</head>
<body>
<h1 align='center'><a href='admin_dashboard.php'>Library Management System</a></h1>	
	<h2><span style="color: black"><marquee behavior="scroll" direction="left"
           onmouseover="this.stop();"
           onmouseout="this.start();"><b>This is library Management System. Library opens at 8:00 AM and close at 8:00 PM</b></marquee></span></h2><br><br>
<div class=
	<div class=></div>
	<div class=>
		<form>
			<table class="table-bordered" width="900px" style="text-align: center">
				<tr>
					<th>Book Name:</th>
					<th>Book Author:</th>
					<th>Issue Date:</th>
				</tr>
				<?php
					$query_run = mysqli_query($connection,$query);
					while($row = mysqli_fetch_assoc($query_run)){
						$book_name = $row['book_name'];
						$author = $row['book_author'];
						$issue_date = $row['issue_date'];
				?>
						<tr>
							<td><?php echo $book_name;?></td>
							<td><?php echo $author;?></td>
							<td><?php echo $issue_date;?></td>
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
