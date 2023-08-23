<!-- This is the code for adding the category  -->
<!-- Name:Madhav Sapkota
UNID:17429433 
Web_resit1
This is the page for the signin for the admin part.
-->
<?php
	require 'header.php';//Connection with the header
	require 'connect.php';//Connection with the database
	session_start();
	if (!isset($_SESSION['userSessionId'])) {
	// header('location:loginform.php');
	 }

	if(isset($_POST['signup'])){
		if ($_POST['password'] != $_POST['check1']){
			echo 'Please Enter the valid password.The password are not matched';


// 		echo '	<h2>Register</h2>
// <form action="" method="POST">
// 	<label>Username</label> <input type="text" name="username"><br><br>
// 	<label>Password</label> <input type="password" name="password"><br><br>
// 	<label>Confirm Password</label> <input type="password" name="check1"><br><br>
// 	<input type="submit" name="signup" value="Sign Up">
// </form>
// 		';


		}
		else{
			$stmt = $pdo->prepare("INSERT INTO login(admin_id, username,password)
				VALUES (:admin_id, :username, :password)");
			$criteria = [
				'admin_id' => '',
				'username' => $_POST['username'],
				'password' => password_hash($_POST['password'], PASSWORD_DEFAULT)//Password verify code for the signin
			];
			$stmt->execute($criteria);
			echo "<h2>Congrtulations!</h2></br>
			The admin account is created.";

		}
	}
		?>

<body>	
	<p><a href="loginform.php">BackIn</a></p>
</body>
	
	
		


<h2>Register</h2>
<form action="" method="POST">
	<label>Username</label> <input type="text" name="username"><br><br>
	<label>Password</label> <input type="password" name="password"><br><br>
	<label>Confirm Password</label> <input type="password" name="check1"><br><br>
	<input type="submit" name="signup" value="Sign Up">
</form>

	
