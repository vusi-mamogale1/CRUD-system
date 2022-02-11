<?php

$conn = new mysqli("localhost","root","","student");
$message ="";

$id = $_POST['idndelete'];

$query = "select * from studentInformation where stud_id = $id";
$res = $conn->query($query);

if($res && $conn->affected_rows > 0)
{
  $conn->query("DELETE FROM studentInformation where stud_id = $id" );
  echo"***** RECORD SUCCESSFULLY DELETED!!! *****";
}
else
   echo"***** NO RECORD ASSOCIATED WITH ID FOUND *****";

$conn->close();

?>