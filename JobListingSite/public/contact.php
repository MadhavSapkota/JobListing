<!-- This is the page where you can find the hiring information and the vacancy about the jobs--> 
<!-- Name:Madhav Sapkota
UNID:17429433 
Web_resit1
-->
	<?php
		require 'header.php';//Connection with the header.php
	?> 

	</section><!--Closing of the section portion-->
		</header><!--Closing of the header portion-->
		<nav>
			<ul>
				<li><a href="index1.php">Home</a></li><!--Link for the Home-->
				<li><a href="allJobs.php">All jobs</a></li><!--Link for the All Jobs-->
				<li><a href="#">Search by category</a>
					<ul>
						<li><a href="#">Category 1</a></li>
						<li><a href="#">Category 2</a></li>
						<li><a href="#">Category 3</a></li>
					</ul>
				</li>
				
				<li><a href="contact.php">Contact us</a></li><!--Link with the Contact us-->
				<li><a href="logoutuser.php">Logout</a></li><!--Link for the Logout from the user panel-->
			</ul>
		</nav>
		<img src="images/banners/randombanner.php" />
		<main>
			
			<nav>
				<ul>
					
			</nav>

			<article>
				
				


					<br>Please fill the form below:<br/>

					<form action="contact.php" method="POST">
							<label>FirstName</label> <input type="text" name="firstname" /><br/><br/><!--TextField for the firstname-->
							<label>Surname</label> <input type="text" name="surname" /><br/><br/><!--TextField for the Surname-->


							<label>Job Category:</label><select name="jobcategory"><br/><br/><!--Label for the Category with multiple optional value-->
						    <option value="Programmer">Programmer</option>
						    <option value="SystemAnalysis">SystemAnalysis</option>
						    <option value="Technical Support">Technical Support</option>
						    <option value="Database Administrator">Database Administrator</option>
						    <option value="Network Administrator">Network Administrator</option>
						    <option value="AI developer">AI developer</option>
					</select>
						 

						
					<label>Job Type</label><select name="jobType"><br/><br/><!--Label for the JobType-->
						<option value="FullTime">FullTime</option>
						<option value="PartTime">PartTime</option>
						<option value="Freelancer">Freelancer</option>
					</select>

					<label>Date_of_birth</label> <input type="date" name="date_of_birth"/><br/><br/><!--TextField for the Date of birth-->
					 <label>Email</label> <input type="text" name="email"/><br/><br/><!--TextField for the email-->
					 <label>Phonenumber</label> <input type="text" name="phonenumber"/><br/><br/><!--TextField for the phonenumber-->
					  <label>Select Resume to upload:</label> <input type="file" name="resume" id="fileToUpload"><!--Place to upload the file-->
					<input type="submit" name="submit" value="Submit" /><!--For the submit button-->
				</form><!--Closing of the form-->
			</article><!--Closing of the article-->
		</main><!--Closing of the main-->

		<footer><!--Opening of the footer-->
			&copy; Bob's Tech Jobs<?php echo date("Y");?><!--This is the footer part which has included the date function to show the current year-->
		</footer><!--Closing of the footer-->

	</body><!--Closing of the body-->
</html><!--Closing of the html tag-->




<?php
	
	require 'connect.php';



if (isset($_POST['submit'])) {//When submit button is pressed following action is performed.
    $stmt = $pdo->prepare("INSERT INTO contactform(contact_id, firstname,surname, jobcategory, jobType, date_of_birth, email, phonenumber,resume)         
      VALUES(:contact_id, :firstname,  :surname, :jobcategory, :jobType, :date_of_birth, :email, :phonenumber, :resume)");

    $criteria = [
                'contact_id' => '',
                'firstname' =>$_POST['firstname'],
                'surname' =>$_POST['surname'],
                'jobcategory' =>$_POST['jobcategory'],
                'jobType' =>$_POST['jobType'],
                'date_of_birth' =>$_POST['date_of_birth'],
                'email' =>$_POST['email'],
                'phonenumber' =>$_POST['phonenumber'],
                'resume' =>$_POST['resume'],

            
                  ];

    $result =$stmt->execute($criteria);//This is the code for the execution of the criteria.
    // require 'index.php';

}

?>