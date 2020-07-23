


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Registration Page</title>
</head>
<body>
   
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
  <fieldset>
    <legend>Validation for Degree</legend>

 
    
    SSC <input type="checkbox" id="check" name="chk" value="SSC"/>
    HSC <input type="checkbox" id="check" name="chk" value="HSC"/>
    Bsc <input type="checkbox" id="check" name="chk" value="Bsc"/>
    Msc <input type="checkbox" id="check" name="chk" value="Msc"/>



    <input type="submit" name="submit" value="submit_Degree">


  </fieldset>
</form>
<br>
<br>




</body>
</html>



<?php


if(empty($_POST["chk"])  )
         
         {
          echo "You Must have to check at least One Check Box";
         }

   

 else 
   {
      echo " Thank you!!!! You have checked Box(S)";
       
      exit();
    }


?>