<?php
	if ($_SERVER["REQUEST_METHOD"]=="POST") {
		$Name = validate($_POST['Name']);
		$Email =validate ($_POST['Email']);
		$Number = validate($_POST['Number']);
		$Message =validate ($_POST['Message']);
		$Gender =validate ($_POST['Gender']);

		echo "Name :".$Name."<br>";
		echo "Email :".$Email."<br>";
		echo "Number :".$Number."<br>";
		echo "Message :".$Message."<br>";
		echo "Gender :".$Gender;
	}

	function validate($data){
		$data=trim($data);
		$data=stripcslashes($data);
		$data=htmlspecialchars($data);
		return $data;
	}

?>