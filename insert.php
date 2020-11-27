<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'pornpaisan112.mysql.database.azure.com', 'pps112@pornpaisan112', 'Pornpaisan112', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}


$product = $_POST['ชื่อสินค้า'];
$price = $_POST['ราคาต่อหน่วย'];
$amount = $_POST['จำนวน'];


$sql = "INSERT INTO ExameLAB (Product , Price , Amount) VALUES ('$product', '$price', '$amount')";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>