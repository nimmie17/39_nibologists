<?php
    $name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
	
	// Database connection
	$conn = new mysqli('localhost','root','','happycradles');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into register(name, email, password, cpassword) values(?, ?, ?, ?)");
		$stmt->bind_param("ssss",$name, $email, $password, $cpassword);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration Successful...";
		$stmt->close();
		$conn->close();
	}
?>