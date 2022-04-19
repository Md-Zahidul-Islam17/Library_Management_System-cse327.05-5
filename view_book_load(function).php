<?php

$conn = mysqli_connect("localhost","root","","test") or die("Connection Failed");

$sql = "SELECT * FROM books";
$result = mysqli_query($conn, $sql) or die("SQL Query Failed.");
$output = "";
if(mysqli_num_rows($result) > 0 ){
  $output = '<table border="1" width="100%" cellspacing="0" cellpadding="10px"> 
              <tr>
                <th width="60px">Id</th>
                <th>Book Name</th>
                <th>Author Name</th>
                <th>Category Name</th>
                <th>Book Price</th>
                <th width="90px">Edit</th>
                <th width="90px">Delete</th>
              </tr>';

              while($row = mysqli_fetch_assoc($result)){
                $output .= "<tr><td align='center'>{$row["book_id"]}</td><td>{$row["book_name"]}</td><td>{$row["author_name"]}</td><td>{$row["cat_name"]}</td><td> {$row["book_price"]}</td><td align='center'><button class='edit-btn' data-eid='{$row["book_id"]}'>Edit</button></td><td align='center'><button Class='delete-btn' data-id='{$row["book_id"]}'>Delete</button></td></tr>";
              }
    $output .= "</table>";

    mysqli_close($conn);

    echo $output;
}else{
    echo "<h2>No Record Found.</h2>";
}
?>
