<?php
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
	$phone = $_POST['phone'];
	$age = $_POST['age'];
    $dob = $_POST['dob'];
    $aadhar = $_POST['aadhar'];
    $pan = $_POST['pan'];
	
	// Database connection
	$conn = new mysqli('localhost','root','','happycradles');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into register(fname, lname, phone, age, dob, aadhar, ) values(?, ?, ?, ?)");
		$stmt->bind_param("ssss",$name, $email, $password, $cpassword);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration Successful...";
		$stmt->close();
		$conn->close();
	}
?>