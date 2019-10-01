<?php
function signUp($firstName, $surName,$email, $gender, $birthDate, $password) {
	$notice =null;
	$conn = new mysqli ($GLOBALS["serverHost"], $GLOBALS["serverUsername"], $GLOBALS["serverPassword"], $GLOBALS["database"]);
	$stmt = $conn->prepare("INSERT INTO vpusers1 (firstname, lastname, birthdate, gender, email, password) 	VALUES(?,?,?,?,?,?)");
	echo $conn->error;
	$options = ["cost" => 12, "salt" => substr(sha1(rand()), 0, 22) ];
	$pwdhash = password_hash($password, PASSWORD_BCRYPT, $options);
	$stmt->bind_param("sssiss", $firstName, $surName, $birthDate,  $gender, $email, $pwdhash );
	
	if($stmt -> execute()){
		$notice = "Kasutaja loomine õnnestus!";
	} else {
		$notice = "Kasutaja loomine ei õnnestunud: " .$stmt->error;
	}
	
	$stmt -> close();
    $conn -> close();
	return $notice;
}
?>