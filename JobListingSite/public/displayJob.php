<!-- This is the page where you can find the hiring information and the vacancy about the jobs--> 
<!-- Name:Madhav Sapkota
UNID:17429433 
Web_resit1
-->
<?php
require 'connect.php';
$results = $pdo->query('SELECT * FROM addjob');//Selecting all the  records from addjob table of database 

?>


<div style = "text-align:center;">
<h2>We are hirirng for the following post:</h2>
<table border="1" cellpadding="2" cellspacing="1.5"><!--Css of the table-->
	<tr><!--Columns having this name are stored in the table-->
		<th>Job Id</th>
		<th>Category Name</th>
		<th>Type Name</th>
		<th>Location</th>
		<th>DeadLine</th>
		<th>Description</th>
	

	</tr>


<?php
	foreach ($results as $row) { //Getting results from the database table.
		echo '<tr>';
		echo '<td>'.$row['job_id'].'</td>';
		echo '<td>'.$row['category_name'].'</td>';
		echo '<td>'.$row['type_name'].'</td>';
		echo '<td>'.$row['location'].'</td>';
		echo '<td>'.$row['deadLine'].'</td>';
		echo '<td>'.$row['description'].'</td>';

       echo '</tr>';
}


echo '</table>';
?>
