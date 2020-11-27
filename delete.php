<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'pornpaisan112.mysql.database.azure.com', 'pps112@pornpaisan112', 'Pornpaisan112', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL PLEASE TRY AGAIN: '.mysqli_connect_error());
}


$product = $_POST['Product'];
$price = $_POST['Price'];
$amount = $_POST['Amount'];


$sql = $sql = "DELETE FROM examlab WHERE Product='$product'";
$sql = "DELETE FROM examlab WHERE Price='$price'";
$sql = "DELETE FROM examlab WHERE Amount='$amount'";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>
