<?php
$conn = new mysqli("localhost","root","","student");

$studNumber =$_POST['stn'];
$name= $_POST['fn'];
$surname= $_POST['sn'];
$courseCode= $_POST['cc'];
$courseDescription= $_POST['cd'];
$grade = $_POST['gr'];

$query = "INSERT INTO studentInformation values('$studNumber','$name','$surname','$courseCode','$courseDescription','$grade')";

$res = $conn->query($query);
if($res)
{
  echo"***** RECORD SUCCEFULLY ADDED!!!*****";
}
else
   echo"***** RECORD NOT ADDED!!! *****";

 
$conn->close();

?>