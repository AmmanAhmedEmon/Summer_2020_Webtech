
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Registration Page</title>
</head>
<body>
   
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
  <fieldset>
    <legend>Validation for Bload Group</legend>

    <select name="s">
  <option value="">Select Bload Group...</option>
  <option value="A+" name="s">A+</option>
  <option value="A-" name="s">A-</option>
  <option value="AB+" name="s">AB+</option>
  <option value="AB-" name="s">AB-</option>
  <option value="B+" name="s">B+</option>
  <option value="B-" name="s">B-</option>
</select>



<br><br>
    <input type="submit" name="submit" value="submit_Bload_Group">
<br><br>
  </fieldset>
</form>
<br>
<br>




</body>
</html>

<?php

if(isset($_POST['s'])) 
  {
    echo "Your Bolad grp is :  ". $_POST['s']. "<br />" ;
  }

else 

{
 
   echo "<li>please select!</li>";
}


?>


