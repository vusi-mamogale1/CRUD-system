<!DOCTYPE html>
<html>
<head>

<link rel= "stylesheet" href="css/styling.css">
<script type="text/javascript" src="javascript/script.js"> </script>
<script type="text/javascript" src="javascript/script2.js"> </script>

</head>
<body>

<div id ="container">
<div id="display">
<h1>HOW TO USE THE APP</h1>
<p id = "mess">
press  *choose file* button to search for data file<br>
press *submit*  button to load file data to the database<br>
press *add record*  button to add a new record to the database<br>
press *update record* button to update existing record<br>
press *delete record* button to delete existing record<br>
press *cancel* button to hide the current pannel<br>
</p>

</div>
<div id="controls">
<form action="php/upload.php" method = "post" >
<input type ="file" name ="upload2" placeholder="Search File" multiple><br>
<input type ="submit" value="submit">
</form>
<input type ="button" value="Add Record" onclick="addRecord()"><br>
<input type ="button" value="Update Record" onclick="updateRecord()"><br>
<input type ="button" value="Delete Record" onclick="deleteRecord()"><br>
</div>
</div>

<div id= "add">
<form id ="frmadd" action ="php/addRecord.php" onsubmit ="return validateAdd()" method ="post">
<label for="heading" id ="lab1">Fill all the fields</label><br>
<input type="text" class="fill" id="up1" name="stn" placeholder="Enter student number..."><br>
<input type="text" class="fill" id="up2" name="fn" placeholder="Enter first name..."><br>
<input type="text" class="fill" id="up3" name="sn" placeholder="Enter surname..."><br>
<input type="text" class="fill" id="up4" name="cc" placeholder="Enter course code..."><br>
<input type="text" class="fill" id="up5" name="cd" placeholder="Enter course description..."><br>
<input type="text" class="fill" id="up6"  name="gr" placeholder="Enter grade..."><br>
<input type ="submit" id= "setnewrecord" value="Add record">
<input type ="button" value="Cancel" onclick="cancel1()">

</form>
</div>

<div id= "update">
<form id ="frmupdate" action="php/update.php" onsubmit ="return validateUpdate()" method="post" >
<label for="change">Choose field to update</label><br>
<select id ="opt" name="sel">
<option value ="stud_id">Student Number</option>
<option value ="firstname">Firstname</option>
<option value ="surname">Surname</option>
<option value ="coursecode">Course Code</option>
<option value ="coursedescription">Course Description</option>
<option value ="grade">Grade</option>
</select><br>
<input type ="text" name="newRec" id="chgField" placeholder="Enter new value">
<input type="text" name ="iii" id ="idForChange" placeholder="Student Number : "><br>
<input type ="submit" value="continue">
<input type ="button" value="Cancel" onclick="cancel2()">
</form>
</div>

<div id= "delete">
<form id ="frmdelete" method="post" onsubmit ="return validateDelete()" action ="php/deleteRecord.php">
<input type="text" name ="idndelete" id ="idno" placeholder="Student Number : "><br>
<input type ="submit" id= "s3" value="Continue">
<input type ="button" value="Cancel" onclick="cancel3()">
</form>
</div>

</body>
</html>