<?php

$conn = new mysqli("localhost","root","","student");

$fieldChange = $_POST["sel"];
$id = $_POST["iii"];
$new =$_POST["newRec"];


$query= "UPDATE  studentInformation SET $fieldChange = '$new'   where stud_id = '$id'";

$res = $conn->query($query);

if(!$res)
{
  echo"NO RECORD UPDATED!!!";
}
else
   echo"RECORD UPDATED SUCCESSFULLY!!!";

$conn->close();
?>