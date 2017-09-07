<html>
	<head>
	  <title>Register</title>
	</head>
	<body>
		<div>
			<h1>Please Enter Your Email and Password</h1>
		</div>
		<div>
			<form action="handle_login.php?action=login" method="post">
				Email Address: <input type="text" name="emailInput" /><br />
				Password: <input type="text" name="passwordInput" /><br />
				<button type="login" value="Log In">Log In</button>
			</form>
		</div>
	</body>
</html>

<!-- 







c. Use crypt() to hash the user submitted password (+$100)





a. Set $_SESSION variables to keep the user logged in. (+$150)

b. If successful, send user to the customer list (+$50)

4. Create a customer list page (customers.php). This page will display the contents of data/customers.csv in an HTML table. The contents should only be displayed if the user is logged in. If not it should redirect them or link them to the login page. (+$150)

5. Allow the user to click a link and logout, send them to the login page after logging out. (+$100) -->