<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "test");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM books
  WHERE book_name LIKE '%".$search."%'
  OR author_name LIKE '%".$search."%'
 ";
}
else
{
 $query = "
  SELECT * FROM books ORDER BY book_id
 ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table table bordered">
    <tr>
     <th>Book Name</th>
     <th>Author Name</th>
     <th>Category Type</th>
     <th>Book price</th>
    </tr>
 ';
 while($row = mysqli_fetch_array($result)) 
 {
  $output .= '
   <tr>
    <td>'.$row["book_name"].'</td>
    <td>'.$row["author_name"].'</td>
    <td>'.$row["cat_name"].'</td>
    <td>'.$row["book_price"].'</td>
    </tr>
  ';
 }
 echo $output;
}
else
{
 echo 'Data Not Found';
}

?>
