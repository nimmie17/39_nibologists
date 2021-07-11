<?php
$email = $_POST['email'];
	$pwd = $_POST['pwd'];
	$conn = new mysqli('localhost','root','','happycradles');

    $stmt = $conn->prepare("SELECT * from register where email='.$email.' and password='.$pwd.'");
    $execval = $stmt->execute();
    
    $query = "";
    $result = mysqli_query($conn, $query);
    if($execval == 1)
    {
        session_start();
        $_SESSION['happycradles']='true';
        header('Location: blaBla.html');

    }else{
        echo "Sorry, Try Again!";
    	$conn->close();
	}
?>