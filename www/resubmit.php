<!DOCTYPE html>
<html lang="en">
<head>
<title>Developer 2 Homework</title>
</head>
<body>

<h1>Developer 2 Homework</h1>

<?php if($_GET['em']!=1){echo "Email Invalid<br>Please enter a valid email address<br><br>";} ?>

<?php if($_GET['un']!=1){echo "Username Invalid<br>Please enter a valid username using 6-10 alphanumeric characters only<br><br>";} ?>

<?php if($_GET['pw']!=1){echo "Password Invalid<br>Please enter a valid password using at least 1 lowercase, 1 uppercase, and 1 number<br><br>";} ?>

<form method="post" action="/submit_form.php">
  <label for="email">Email Address:</label><br>
  <input type="text" id="email" name="email" value="<?php echo htmlspecialchars($_GET['email']) ?>" required><br><br>
  
  <label for="uname">Username:</label><br>
  <input type="text" id="uname" name="uname" value="<?php echo htmlspecialchars($_GET['uname']) ?>" required><br><br>
  
  <label for="pw">Password:</label><br>
  <input type="password" id="pw" name="pw" value="" required><br><br>
  
  <label for="gender">Gender:</label><br>
  <select id="gender" name="gender" required>
	<?php
	
		$gender = $_GET['gender'];
		if(strcmp($gender, "male")==0){
			echo "<option value=\"male\" selected>Male</option>";
		}else{echo "<option value=\"male\">Male</option>";}
		
		if(strcmp($gender, "female")==0){
			echo "<option value=\"female\" selected>Female</option>";
		}else{echo "<option value=\"female\">Female</option>";}	
		
		if(strcmp($gender, "non-binary")==0){
			echo "<option value=\"non-binary\" selected>Non-Binary</option>";
		}else{echo "<option value=\"non-binary\">Non-Binary</option>";}
		
		if(strcmp($gender, "other")==0){
			echo "<option value=\"other\" selected>Other</option>";
		}else{echo "<option value=\"other\">Other</option>";}

	?>
	
  </select><br><br>
  
  <input type="submit" value="Submit">
</form>

</body>
</html>