<!-- This is the page where you can find the hiring information and the vacancy about the jobs--> 
<!-- Name:Madhav Sapkota
UNID:17429433 
Web_resit1
-->
	<?php 
	require 'header.php';//Code for linking the header.php file in the alljobs.php
	?>
	</section> <!--Ending of the section-->
		</header><!--Ending of the header section-->
		<nav><!--Opening of navigation-->
			<ul><!--Opening of the ul-->
				<li><a href="index.php">Home</a></li><!--Link for the home page -->
				<li><a href="contact.php">Contact us</a></li><!--Link for the contact page-->
				<li><a href="allJobs.php">All jobs</a></li><!--Link for the All Jobs-->
				<li><a href="login.php">Login</a></li><!--Link for the Login -->
				
				
			</ul><!--Closing of the ul-->

		</nav><!--Closing of the nav-->
		<img src="images/banners/randombanner.php" />
		<main>

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
				<p></p>

				<ul>
					
				</ul>


				<form><!--Opening of the form-->
					<p></p>
					<?php 
						 require 'displayJob.php';//This is the page which retrives the information stored in the database in the tabular form. 
					 ?>
				</form><!--Closing of the form-->
			</article><!--Closing of the article-->
		</main><!--Closing of the main-->

		<footer><!--Opening of the footer-->
			&copy; Bob's Tech Jobs<?php echo date("Y");?><!--This is the footer part which has included the date function to show the current year-->
		</footer><!--Closing of the footer-->

	</body><!--Closing of the body section-->
</html><!--Closing of the html tag-->
