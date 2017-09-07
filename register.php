<html>
	<head>
	  <title>Register</title>
	</head>
	<body>
		<div>
			<b>Register</b> below to gain access to ALL my personal info! 
			<br /><br />
		</div>
		<div>
			<form action="handle_register.php?action=register" method="post">
				Email Address: <input type="text" name="emailInput" /><br />
				First Name: <input type="text" name="firstNameInput" /><br /> 
				Last Name: <input type="text" name="lastNameInput" /><br />
				Password: <input type="text" name="passwordInput" /><br />
				Confirm Password: <input type="text" name="passwordReInput" /><br />
				Date of Birth: <input type="text" name="dob"><br />
				Credit Card Number: <input type="text" name="creditCardNum"><br />
				Expiration Date: <input type="text" name="creditCardExp"><br />
				<button type="submit" value="Save">Save</button>
			</form>
		</div>
	</body>
</html>