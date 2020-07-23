


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Registration Page</title>
</head>
<body>
   
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
  <fieldset>
    <legend>Validation for date of Birth</legend>

   Date of Birth <input type="date" name="dob">
    
    <input type="submit" name="submit" value="submit_DOB">


  </fieldset>
</form>
<br>
<br>

<?php  
    
?>


</body>
</html>



<?php


if(empty($_POST["dob"]) )
         
         {
          echo "You forgot to fill-up in Your Date of birth field.";
         }

   

 else 
   { 


    $newDate = date("d-m-Y", strtotime($_POST['dob']));  
    echo "Your DOB  is : ".$newDate. " (MM-DD-YYYY)"; 



       "<br />";      
      exit();
    }


?>
