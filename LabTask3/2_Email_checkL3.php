


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

    Email: <input type="Email" name="Email" > <br> <br>
    
    <input type="submit" name="submit" value="submit_Email">


  </fieldset>
</form>
<br>
<br>




</body>
</html>



<?php


if(empty($_POST["Email"]) )
         
         {
          echo "You forgot to fill-up in Your Email field.";
         }

   

 else 
   {
      echo "Your Email ID is :  ". $_POST['Email']. "<br />" ;
       "<br />";      
      exit();
    }


?>






<!--    if( $_POST["name"] ) 
   {
     

      // if (preg_match("/[^A-Za-z'-]/",$_POST['name'] )) {
      
      //    die ("invalid name and name should be alpha");
      

    }
 -->
