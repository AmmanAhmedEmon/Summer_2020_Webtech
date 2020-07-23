


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registration Page</title>
</head>
<body>
	
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
  <fieldset>
    <legend>Validation for Name</legend>

    Name: <input type="text" name="name" > <br> <br>
    
    <input type="submit" name="submit" value="submit_Name">


  </fieldset>
</form>
<br>
<br>




</body>
</html>



<?php


if(empty($_POST["name"]) )
   		
   		{
          echo "You forgot to fill-up in Your Name field.";
    	}

	else if (preg_match("/[^A-Za-z'-.- ]/",$_POST['name'] ))
		 {
	          echo "Name Must be letters and Start with letter";
	     }
	
	else if (preg_match("/^[a-z]+(?:\s[a-z]+)+$/", $_POST['name'] ))
	     {
	     	echo "More Than two word";
	     }
	    

 else 
 	{
      echo "Welcome ". $_POST['name']. "<br />" ;
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
