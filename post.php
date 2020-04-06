<?php
$name=$_POST['name'];
$conn=mysqli_query('localhost','root','','prac');
$query=INSERT INTO `fin`(`id`, `name`) VALUES ('$name');
$stmt=mysqli_connect($conn,$query);
?>