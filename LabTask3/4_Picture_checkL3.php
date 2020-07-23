


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Registration Page</title>
</head>
<body>
   
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
  <fieldset>
    <legend>Validation for Email</legend>

    User ID: <input type="number" name="ID" min=0 > <br> <br>
    Picture: <input type="file" id="img" name="img" accept="image/*"> <br> <br>
    
    <input type="submit" name="submit" value="submit_Email">


  </fieldset>
</form>
<br>
<br>




</body>
</html>



<?php


if(empty($_POST["ID"]) || empty($_POST["img"])  )
         
         {
          echo "Please field Up fields";
         }

   

 else 
   {
      echo "Your Number is :  ". $_POST['ID']. "<br />" ;
       "<br />";  

       echo "Your selected Image name is ".$_POST['img']. "<br />" ;    
      exit();
    }


?>