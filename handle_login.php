<?php
session_start();

$fileName = "customers.csv";
$allCustomers = file($fileName);
$isLoggedIn = false;
		

foreach($allCustomers as $customer) {
	$userParts = explode(",", $customer);
	if($userParts[0] == $_POST['emailInput'] && $userParts[1] == $_POST['passwordInput']) {
		$_SESSION['email'] = $userParts[0];
		$_SESSION['firstName'] = $userParts[2];
		$_SESSION['is_user'] = 1;
		$isLoggedIn = true;
		break;
	}	
}

if($isLoggedIn) {
	echo "Congratulations! You've logged in.";
	header('Location: http://circuslabs.net/~rachel.kahn/php/customers.php');
} else {
	echo "We're sorry. The username and password you provided do not match.";
}

?>