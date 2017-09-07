<?php
session_start();
	
$requiredInputs = array('emailInput', 'passwordInput', 'firstNameInput', 'lastNameInput', 'dob', 'creditCardNum', 'creditCardExp' );
$allSubmitted = 0;	
$incompleteField = false;

$cryptPass = crypt('passwordInput');
$postThis = array('emailInput', $cryptPass, 'firstNameInput', 'lastNameInput', 'dob', 'creditCardNum', 'creditCardExp' );

foreach($requiredInputs as $inputField) {
	if (!empty($_POST[$inputField])) {
		$allSubmitted++;
	} else {
		$incompleteField = true;
		echo "Invalid input at ".$inputField.". Please enter your information.";
	}
}

if ($allSubmitted = count($requiredInputs) && $incompleteField != true) {
	echo "Thank you for your purchase! <a href='login.php'>Back to Login</a>";
	$postData = implode(" , ", $postThis)."\n";	
	$fileName = "customers.csv";
	$writeData = fopen($fileName, "a+");
	fwrite($writeData, $postData);
	fclose($writeData);
}

	
?>
