<?php
require_once('dbconfig.php');
?>
<?php

if(isset($_POST)){

	$username 		= $_POST['username'];
	$password 		= $_POST['password'];
	$phonenumber 	= $_POST['phonenumber'];
	$dateofbirth	= $_POST['dateofbirth'];
    $postal         = $_POST['postal'];
    $email 		    = $_POST['email'];

		$sql = "INSERT INTO users (uname, upassword, user_phno, user_dob, postal_code, email) VALUES(?,?,?,?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$username, $password, $phonenumber, $dateofbirth, $postal, $email]);
		if($result){
			echo 'Successfully saved.';
		}else{
			echo 'There were erros while saving the data.';
		}
}else{
	echo 'No data';
}