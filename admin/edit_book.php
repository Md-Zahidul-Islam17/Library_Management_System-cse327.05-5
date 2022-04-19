<?php

$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];
$cat = $_POST["cat"];
$price = $_POST["price"];

$conn = mysqli_connect("localhost","root","","test") or die("Connection Failed"); 

$sql = "INSERT INTO books(book_name, author_name, cat_name, book_price)
        VALUES ('{$first_name}','{$last_name}','{$cat}','{$price}')";

if(mysqli_query($conn, $sql)){
  echo 1;
}else{
  echo 0;
}


?>
