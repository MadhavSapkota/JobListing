	<!-- This is the code for adding the category  -->
<!-- Name:Madhav Sapkota
UNID:17429433 
Web_resit1
-->
	<?php
		require 'header.php';
	?> 

			</section>
		</header>
		<nav>
			<ul>
				<li><a href="adminindex.php">Home</a></li>
				<!-- <li><a href="#">All jobs</a></li> -->
				<!-- <li><a href="#">Search by category</a>
					<ul>
						<li><a href="#">Category 1</a></li>
						<li><a href="#">Category 2</a></li>
						<li><a href="#">Category 3</a></li>
					</ul>
				</li> -->
				<!-- <li><a href="#">Contact us</a></li> -->
			</ul>
		</nav>
		<img src="images/banners/randombanner.php" />
		<main>
			<!-- Delete the <nav> element if the sidebar is not required -->
			<nav>
				<ul>
					<!-- <li><a href="#">Sidebar</a></li>
					<li><a href="#">This can</a></li>
					<li><a href="#">Be removed</a></li>
					<li><a href="#">When not needed</a></li>
				</ul> -->
			</nav>

			<article>
				
				
	<?php
	require 'connect.php';//database connection
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		$stmt =$pdo->prepare("SELECT * FROM addjob WHERE job_id =:id");//Selecting from add job table
		//$criteria =['$id' =>job_id];
		$criteria=$_GET;
		$stmt->execute($criteria);
		$row = $stmt->fetch();
	}
	if(isset($_POST['update'])){ //Updates information
		extract($_POST);
		$result = $pdo->prepare("UPDATE addjob SET
							category_name = :category_name,
							type_name = :type_name,
							location = :location,
							deadLine = :deadLine,
							description = :description
							WHERE
							job_id = :id");
		if($result) echo 'Update Successfully';
		else echo 'Not update';
	}
?>
<!-- EditingFormInformation -->
<form action="editingindex.php" method="POST">
							<label>Update:</label><select name="category_name"><br/><br/>
						    <option value="Programmer">Programmer</option>
						    <option value="SystemAnalysis">SystemAnalysis</option>
						    <option value="Technical Support">Technical Support</option>
						    <option value="Database Administrator">Database Administrator</option>
						    <option value="Network Administrator">Network Administrator</option>
						    <option value="AI developer">AI developer</option>
					</select>
						 



					<label>Job Type</label><select name="type_name"><br/><br/>
						<option value="FullTime">FullTime</option>
						<option value="PartTime">PartTime</option>
						<option value="Freelancer">Freelancer</option>
					</select>

					<label>Location</label> <input type="text" name="location"/><br/><br/>
					<!-- <label>Salary</label> <input type="text" /><br/><br/>
					<label>ZIP</label> <input type="text" /><br/><br/> -->
					<label>DeadLine</label><input type="datetime-local"  name="deadLine" /><br/><br/>
					<label>Description</label><textarea name="description"></textarea>

					
					
					
					

					<input type="submit" name="update" value="Update" />
				</form>




					
			</article>
		</main>

		<footer>
			&copy; Bob's Tech Jobs
		</footer>

	</body>
</html>


