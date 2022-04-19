<?php

$student_id = $_POST["id"];
$firstName = $_POST["first_name"];
$lastName = $_POST["last_name"];
$cat = $_POST["cat"];
$price = $_POST["price"];

$conn = mysqli_connect("localhost","root","","test") or die("Connection Failed"); 

$sql = "UPDATE books SET book_name = '{$firstName}',author_name = '{$lastName}',
        cat_name = '{$cat}', book_price = '{$price}'
        WHERE book_id = {$student_id}";

if(mysqli_query($conn, $sql)){
  echo 1;
}else{
  echo 0;
}

?>
