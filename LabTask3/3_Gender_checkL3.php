
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Registration Page</title>
</head>
<body>
   
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
  <fieldset>
    <legend>Validation for Gender</legend>

    Male <input type="radio" name="rad" value="Male">
    Female <input type="radio" name="rad" value="Female">
    Other <input type="radio" name="rad" value="Other">
<br><br>
    <input type="submit" name="submit" value="submit_Gender">
<br><br>
  </fieldset>
</form>
<br>
<br>




</body>
</html>

   <?php

     if (isset($_POST['rad'])) {

       echo 'A radio button was selected.<br>';

       if ($_POST['rad'] === 'Male') {

         echo 'Male selected.';

       } else if ($_POST['rad'] === 'Female') {

         echo 'Female selected';

       }
       else if ($_POST['rad'] === 'Other') {

         echo 'Other selected';

       }

     } else {

       echo 'No radio buttons were selected.';

     }

   ?>

