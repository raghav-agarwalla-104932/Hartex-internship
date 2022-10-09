<?php 

$conn= mysqli_connect('localhost','root','','emplyee') or die ("co".mysqli_connect_error());
$empi= $_POST['employee_id'];
$stime= $_POST['stime'];
$ltime= $_POST['ltime'];
$shift= $_POST['shift'];
$date = date('d/m/y');
$query = 'UPDATE employee_pay SET ';


?>