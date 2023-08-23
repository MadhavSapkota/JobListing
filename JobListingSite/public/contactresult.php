<!-- This is the page where you can find the hiring information and the vacancy about the jobs--> 
<!-- Name:Madhav Sapkota
UNID:17429433 
Web_resit1
-->

	<body>
	<nav>
		<li><a href="adminindex.php">Back</a></li><!--Here the link of the "back" button is placed-->
	</nav>

<?php
require 'header.php';//Connecting with the header.php

require 'connect.php';//Connecting with the connect.php
$results = $pdo->query('SELECT * FROM contactform');//This gives the total results from the contactform.

?>


<div style = "text-align:center;"><!--This is css of the table-->
<br><h2>ContactInformation</h2><br/>
<table border="1" cellpadding="2" cellspacing="1.5"><!--This shows the dimension of the columns-->
	<tr><!--Table is started-->
		<th>ContactId</th>
		<th>Firstname</th>
		<th>Surname</th>
		<th>JobCategory</th>
		<th>JobType</th>
		<th>Date Of Birth</th>
		<th>Email</th>
		<th>PhoneNumber</th>
		<th>Resume</th>
	

	</tr><!--Table is Ended-->


<?php
	foreach ($results as $row) {//Retriving results from the database
		echo '<tr>';
		echo '<td>'.$row['contact_id'].'</td>';
		echo '<td>'.$row['firstname'].'</td>';
		echo '<td>'.$row['surname'].'</td>';
		echo '<td>'.$row['jobcategory'].'</td>';
		echo '<td>'.$row['jobType'].'</td>';
		echo '<td>'.$row['date_of_birth'].'</td>';
		echo '<td>'.$row['email'].'</td>';
		echo '<td>'.$row['phonenumber'].'</td>';
		echo '<td>'.'<a href="'. $row['resume'] .'">'. htmlentities($row['resume'], ENT_COMPAT, 'UTF-8') .'</a><br />'; 
		// header("Content-type: application/pdf");
		// //header('Content-disposition: attachment; filename="thing.pdf"');
		//  header('Content-length: ' . $row[pdflength]);
		// print $bytes;


       echo '</tr>';
}


echo '</table>';//This is the end of the table.
?>

</body><!--End of the body tag-->

	
