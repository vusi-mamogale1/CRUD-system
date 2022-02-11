function validateAdd()
{
  
  var elem1 = document.getElementById("up1").value;
  
  var elem2 = document.getElementById("up2").value; 
  
  var elem3 = document.getElementById("up3").value; 
  
  var elem4 = document.getElementById("up4").value; 
  
  var elem5 = document.getElementById("up5").value; 
  
  var elem16 = document.getElementById("up6").value;  
  
    if(elem1==""||elem2==""||elem3=="" ||elem4==""||elem5==""||elem6=="")
    {
        alert("Fill in all the fields");
        return false;
     }
  

}

function validateUpdate()
{
  var elem1 = document.getElementById("chgField"); 
  var elem2 = document.getElementById("idForChange"); 

  if(elem1.value =="" || elem2.value=="")
  {
       alert("Fill in all the fields");
       return false;
  }
 
}

function validateDelete()
{
  var elem1 = document.getElementById("idno"); 

   if(elem1.value =="")
   {
       alert("Fill in the fields");
       return false;
   }

}