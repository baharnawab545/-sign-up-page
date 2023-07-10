<?php
$username = $_POST['username'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];
$conn=new mysqli('localhost','root','','bahar');
if($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection Failed :".$conn->connect_error);
} else {
    $stmt = $conn->prepare (" INSERT INTO registration(username,lastname,email,password,cpassword) VALUES(?,?,?,?,?)");
    $stmt->bind_param("sssss", $username, $lastname,  $email, $password, $cpassword);
    $execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}

?>