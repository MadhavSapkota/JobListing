<!-- This is the code for adding jobs in the admin panel -->
<!-- Name:Madhav Sapkota
UNID:17429433 
Web_resit1
-->
	<?php
		require 'header.php';//This is the code for connecting the header.php into this file.
	?> 
		</section> <!--This is the ending point of the section-->
		</header><!--This is the ending point of the header-->
		<nav>
			<ul>
				<li><a href="adminindex.php">Home</a></li><!--This is the link for the home page-->
				<li><a href="#">All jobs</a></li>
				<li><a href="#">Search by category</a>
					<ul>
						<li><a href="#">Category 1</a></li>
						<li><a href="#">Category 2</a></li>
						<li><a href="#">Category 3</a></li>
					</ul>
				</li>
				<li><a href="#">Contact us</a></li>
			</ul>
		</nav>
		<img src="images/banners/randombanner.php" />
		<main><!--This is the starting point of the main-->
			
					
			</nav><!--This is the ending point of the navigation -->

			<article> 
				<br>Please fill the form below:<br/><!--This is the header statement of the form -->
					<form action="addjobs.php" method="POST"><!--This is the opening portion of the form-->
							<label>Job Category:</label><select name="category_name"><br/><br/><!--This is the label of job category which contains different optional value-->
						    <option value="Programmer">Programmer</option>
						    <option value="SystemAnalysis">SystemAnalysis</option>
						    <option value="Technical Support">Technical Support</option>
						    <option value="Database Administrator">Database Administrator</option>
						    <option value="Network Administrator">Network Administrator</option>
						    <option value="AI developer">AI developer</option>
					</select>
						 



					<label>Job Type</label><select name="type_name"><br/><br/><!--This contains different value of the  Job Type-->
						<option value="FullTime">FullTime</option>
						<option value="PartTime">PartTime</option>
						<option value="Freelancer">Freelancer</option>
					</select>

					<label>Location</label> <input type="text" name="location"/><br/><br/><!--This is the text field for storing location-->
					<label>DeadLine</label><input type="datetime-local"  name="deadLine" /><br/><br/><!--This is the textField for the DeadLine.-->
					<label>Description</label><textarea name="description"></textarea><!--This is the textField for the Description.-->

					
					
					
					

					<input type="submit" name="submit" value="Submit" /><!--This is the submit button-->
				</form><!--Ending of the form-->
			</article><!--Ending of the article-->
		</main><!--Ending of the main-->

		<footer><!--Opening of the footer-->
			&copy; Bob's Tech Jobs<?php echo date("Y");?><!--This is the footer part which has included the date function to show the current year-->
		</footer><!--Ending of the footer-->

	</body><!--Ending of the body portion-->
</html><!--Ending of the html tag-->



<?php //This is the starting of the php tag.

require 'connect.php';//This is the database connection code.

if (isset($_POST['submit'])) {						//Following execution is carried out when the submit button is carried. 
    $stmt = $pdo->prepare("INSERT INTO addjob(job_id, category_name, type_name, location, deadLine, description)         
      VALUES(:job_id, :category_name,  :type_name, :location, :deadLine, :description)");

    $criteria = [
                'job_id' => '',
                'category_name' =>$_POST['category_name'],
                'type_name' =>$_POST['type_name'],
                'location' =>$_POST['location'],
                'deadLine' =>$_POST['deadLine'],
                'description' =>$_POST['description'],

            
                  ];

   if($result =$stmt->execute($criteria)){
		echo 'record Added';//When the operation is accompanished the result "record Added "is seen.
}
    // require 'index.php';

}

?><!--Ending of the php code-->
