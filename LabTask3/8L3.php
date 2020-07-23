

<html>
	<body>
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
		<fieldset>
				<table align="center" height="60%"width="30%"border="1">
				<tr height="60px"width="60px">
					<td colspan="3" align="center"><legend><h1 font-size="20%">PERSON PROFILE</h1></legend></td>
					
				</tr>
				
				<tr> <!-- for Name--------------- -->
					<td width="80px"height="40px"align="center">Name</td>
					<td width="200px"height="40px">

					<input type="text" name="name" value=""></td>
				
					<td width="30px"></td>
				</tr>
				


				<tr> <!-- for Email------------------------------------------ -->
					<td width="80px"height="40px"align="center">Email</td>
					<td width="200px"height="40px">

						<input type="Email" name="Email"></td>
					
					<td width="30px"></td>
				</tr>
				



				<tr>
					<td width="80px"height="40px"align="center">Gender</td>
					<td width="200px"height="40px">
						<input type="radio" name="gender" value="" >  Male 
						<input type="radio" name="gender" value="" > Female
						<input type="radio" name="gender" value="" > Other 
					
					</td>
					<td width="30px"></td>
				</tr>
				
				<tr>
					<td width="80px"height="40px"align="center">Date of birth</td>
					<td width="200px"><input type="text" name="Date of birth"size="2">/<input type="text" name="Date of birth"size="2">/<input type="text" name="Date of birth"size="4"><i>(dd/mm/yyyy)</i></td>
					<td width="30px"></td>
				</tr>
				
				<tr>
					<td width="80px"height="40px"align="center">Blood Group</td>
					<td width="200px">
						<select name="">
						<option value="">A pos</option>
						<option value="">A neg</option>
						<option value="">B pos</option>
						<option value="">B neg</option>
						<option value="">O pos</option>
						<option value="">O neg</option>
						</select>
					</td>
					<td width="30px"></td>
				</tr>
				
				<tr>
					<td width="80px"height="40px"align="center">Degree</td>
					<td width="200px">
					
					<input type="checkbox" name="">SSC<input type="checkbox" name="">HSC<input type="checkbox" name="">BSc.<input type="checkbox" name="">MSc.
					</td>
					<td width="30px"></td>
				</tr>
				
				<tr>
					<td width="80px"height="40px"align="center"></td>
					<td width="200px">
						
			  &ensp;&ensp;&ensp; <input  type="submit" name="submit" value="Submit_Form">
			   <input type="reset" name="reset" value="Reset_Form">



					</td>
					
					<td width="30px"></td>
				</tr>
				
			
			
				</table>
		</fieldset>
		</form>
		<br>
		<br>
		<br>
		<br>
	</body>
</html>



<!-- ---------------------------------------PHP-------------------------------------- -->



<?php
//Validation for name---------------------------



if(empty($_POST["Email"]) )
         
         {
          echo "***Email field required.";
         }



 // else 
 // 	{
 //      echo "Welcome ". $_POST['name']. "<br />" ;
 //       "<br />";      
 //      exit();
 //  	 }
	
   		





?>



