<?php
$fn = $_POST['fname'];
$ln = $_POST['lname'];
$ph = $_POST['phone'];
$add = $_POST['address'];


$con = mysqli_connect('localhost', 'root', '', 'newdata');
$sql = mysqli_query( $con, "insert into insertdata(fname,lname,phone,address) values ('$fn', '$ln', '$ph', '$add')");

include("contact.php");

?>