<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
</head>
<body>

<h1>Registration Form</h1>
<form method="POST" action="registration.php">
	<label>Username</label>
	<input type="text" name="username" id="username"><br><br>
	
	<label>Email</label>
	<input type="email" name="email" id="email"><br><br>
	
	<label>Password</label>
	<input type="password" name="pass" id="pass"><br><br>
	
	<label>Confrim Password</label>
	<input type="password" name="cpass" id="cpass"><br><br>
	
	<input type="submit" value="Register">
</form>
</body>
</html>

<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
	$username=$_POST['username'];
	$email=$_POST['email'];
	$pass=$_POST['pass'];
	$cpass=$_POST['cpass'];

	if(empty($username) || empty($email) || empty($pass)|| empty($cpass)){
		echo"<p style='color:red;'>Please fill all required fields</p>";
	}
	elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		echo"<p style='color:red;'>Please enter a valid email address</p>";
	}
	elseif($pass!=$cpass){
		echo"<p style='color:red;'>Passowrd and Confrim Password must be same.</p>";
	}
	else{
		echo"<p style='color:red;'>Registration Successfull ! </p>";
	}
}

?>

