<?php


$car= $_POST['cartype'];
$pickup= $_POST['pickup'];
$pickdate= date("Y-m-d", strtotime($_POST['datepicker']));
$dropoff= $_POST['dropoff'];
$dropdate= date("Y-m-d", strtotime($_POST['datepicker2']));
$name= $_POST['name'];
$email= $_POST['email'];
$phoneno= $_POST['phone'];
include 'email.php';


$conn=mysqli_connect('localhost','root','','drivedock');
$query="INSERT INTO `car`(`car`, `pickup`, `dropoff`, `name`, `email`, `phoneno`, `pickdate`, `dropdate`) VALUES ('$car','$pickup','$dropoff','$name','$email','$phoneno','$pickdate', '$dropdate')";
// $query="INSERT INTO `car`(`id`, `car`, `pickup`, `dropoff`, `name`, `email`, `phoneno`, `pickdate`, `dropdate`, `time`) VALUES ('$car','$pickup','$dropoff','$dropdate','$name','$email','$phoneno','$pickdate', '$dropdate')";
echo $query;
mysqli_query($conn,$query);
echo 'Data Submitted';


?>