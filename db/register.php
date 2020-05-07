<?php
require('dbconfig.php');
?>
<?php

if(isset($_POST)){

	$email 		    = $_POST['#email'];
	$username 		= $_POST['#username'];
	$dob 			= $_POST['#dob'];
    $phno	        = $_POST['#phno'];
    $postal         = $_POST['#post'];
	$password 		= md5($_POST['#password']);

		$sql = "INSERT INTO users ( user_id, user_name, password, gender, user_phno, user_dob, postal_code) VALUES(?,?,?,?,?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$email, $username, $password, $phno, $dob, $postal]);
		if($result){
			echo 'Successfully saved.';
		}else{
			echo 'There were erros while saving the data.';
		}
}else{
	echo 'No data';
}