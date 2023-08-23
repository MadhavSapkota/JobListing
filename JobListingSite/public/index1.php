<!-- This is the code for adding the category  -->
<!-- Name:Madhav Sapkota
UNID:17429433 
Web_resit1
-->
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="styles.css"/>
		<title>Northampton Tech Jobs</title>
	</head>
	<body>
		<header>
			<section>
				<h1>Northampton Tech Jobs</h1>
			</section>
		</header>
		<nav>
			<ul>
				<li><a href="index1.php">Home</a></li>
				<li><a href="contact.php">Contact us</a></li>
				<li><a href="allJobs.php">All jobs</a></li>
				<!-- <li><a href="#">Login</a>
					<ul>
						<li><a href="sakhya.php">UserLogin</a></li>
						<li><a href="login.php">AdminLogin</a></li>
					</ul>

				</li> -->
				<li><a href="logoutuser.php">Logout</a> <!-- This is the logout section for the user -->
				<li><a href="#">Search by category</a>
					<ul>
						<li><a href="#">Category 1</a></li>
						<li><a href="#">Category 2</a></li>
						<li><a href="#">Category 3</a></li>
					</ul>
				</li>
				
			</ul>

		</nav>
		<img src="images/banners/randombanner.php" />
		<main>
			<!-- Delete the <nav> element if the sidebar is not required -->
			<nav>
				<ul>
					<li><a href="#"></li>
					<li><a href="#"></a></li>
					<li><a href="#"></a></li>
					<li><a href="#"></a></li>
				</ul>
			</nav>

			<article>
				<h2></h2>
				<p>
					<br>Welcome<br/> to  the home page of the Northampton Tech Jobs.This is the official site for Northampton Tech Industry.Here you can make contact,see the job vacany and submit the form to this organization.<br/>
				</p>

				<!-- <ul> -->
					<!-- <li></li> -->
					<!-- <li></li> -->
					<!-- <li></li> -->
				<!-- </ul> -->


				<form>
					<p></p>
					<?php 
						// require 'displayJob.php';
					 ?>

					<!-- <label>Field 1</label> <input type="text" />
					<label>Field 2</label> <input type="text" />
					<label>Textarea</label> <textarea></textarea>
 -->
					<!-- <input type="submit" name="submit" value="Submit" /> -->
				</form>
			</article>
		</main>

		<footer>
			&copy; Bob's Tech Jobs<?php echo date("Y");?>
		</footer>

	</body>
</html>
