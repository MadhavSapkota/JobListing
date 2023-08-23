<!-- This is the code for the adminindex(which is displayed when the admin sucessfully login in the system)--> 
<!-- Name:Madhav Sapkota
UNID:17429433 
Web_resit1
-->
<?php require 'header.php';?>

			</section>
		</header>
		<nav>
			<ul>
				<li><a href="">Home</a></li>
				<li><a href="#"></a></li>
				<li><a href="#"></a>
					<ul>
						<li><a href="#"></a></li>
						<li><a href="#"></a></li>
						<li><a href="#"></a></li>
					</ul>
				</li>
				<li><a href="logout.php">LogOut</a></li>
			</ul>
		</nav>
		<img src="images/banners/randombanner.php" />
		<main>
			
			<nav><!--This is the opening part of the navigation section-->
				<ul></ul><!--This is the opening and closing portion of the ul section-->
			</nav><!--This is the closing section of the navigation-->

			<article><!--This is the opening part of the article section-->
				<h2>This is the admin page</h2>
				<p>Admin page contains the following amendment</p>

				<ul><!--Starting of the ul-->
					<li><a href="addjobs.php">Adding Jobs</a></li><!--This is the link for adding jobs in the adminindex page-->
					<li><a href="addingCategory.php">Adding Categories</a></li><!--This is the link for addingCategory in the adminindex page-->
					<!-- <li><a href="#">Assigning Jobs to Categories</a></li> -->
					<!-- <li><a href="#">Deleting jobs</a></li> -->
					<li><a href="editingCategory.php">Editing existing categories and Jobs</a></li><!--This is the link for Editing Category in the admin page-->
					<li><a href="deletingCategory.php">Deleting categories and jobs</a></li><!--This is the link for Deleting category in the admin page-->
					<li><a href="contactresult.php">View application for each jobs</a></li><!--This is the link for Viewing application for each jobs-->

				</ul><!--Ending of the ul-->


				
			</article><!--Ending of the ul-->
		</main><!--Ending of the main-->

		<footer><!--Start of the footer-->
				&copy; Bob's Tech Jobs<?php echo date("Y");?><!--This is the footer part which has included the date function to show the current year-->
		</footer><!--Ending of the footer-->

	</body><!--Ending of the body-->
</html><!--Ending of the html tag-->
