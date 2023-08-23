<!-- This is the code for adding the category  -->
<!-- Name:Madhav Sapkota
UNID:17429433 
Web_resit1
This is the signin for the user section.
-->
<?php
	require 'header.php';
	require 'connect.php';
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
			$stmt = $pdo->prepare("INSERT INTO userlogin(user_id, username,password)
				VALUES (:user_id, :username, :password)");
			$criteria = [
				'user_id' => '',
				'username' => $_POST['username'],
				'password' => $_POST['password']
			];
			$stmt->execute($criteria);
			echo "<h2>Congrtulations!</h2></br>
			The user account is created.";

		}
	}
		?>

<body>	
	<p><a href="sakhya.php">BackIn</a></p>
</body>
	
	
		


<h2>Register</h2>
<form action="" method="POST">
	<label>Username</label> <input type="text" name="username"><br><br>
	<label>Password</label> <input type="password" name="password"><br><br>
	<label>Confirm Password</label> <input type="password" name="check1"><br><br>
	<input type="submit" name="signup" value="Sign Up">
</form>

	
