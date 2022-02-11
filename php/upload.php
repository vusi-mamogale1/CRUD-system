<?php

$conn = new mysqli("localhost","root","","student");
$count = 0;
$message ="";

$filename = $_POST["upload2"];

$myfile = fopen($filename, "r");

$unwantedLine = fgets($myfile);

while(!feof($myfile))
{
  $row =fgets($myfile);
  $arr = explode(";",$row);
  $zero =0;
  $one=1;
  $two=2;
  $three=3;
  $four=4;
  $five=5;
  
  $query = "INSERT INTO studentInformation VALUES('$arr[$zero]','$arr[$one]','$arr[$two]','$arr[$three]','$arr[$four]','$arr[$five]')";
  $res =$conn->query( $query);

  if(!$res)
  {
     echo "RECORD NOT ADDED TO DATABASE"."<br>";
  }
  else
     echo "STUDENT NUMBER : $arr[$zero]"."<br>";
     echo "STUDENT NUMBER : $arr[$one]"."<br>";
     echo "STUDENT NUMBER : $arr[$two]"."<br>";
     echo "STUDENT NUMBER : $arr[$three]"."<br>";
     echo "STUDENT NUMBER : $arr[$four]"."<br>";
     echo "STUDENT NUMBER : $arr[$five]"."<br>";
     echo"--------------------------------"."<br>";
	     
}

$conn->close();
?>