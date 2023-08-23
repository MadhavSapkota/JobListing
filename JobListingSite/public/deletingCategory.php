<!-- This is the page where you can find the hiring information and the vacancy about the jobs--> 
<!-- Name:Madhav Sapkota
UNID:17429433 
Web_resit1
-->
<?php
        require 'header.php';//Link for the connecting with header.
    ?> 

            </section><!--Ending of the section-->
        </header><!--Ending of the header-->
        <nav><!--Starting of the nav-->
            <ul>
                <li><a href="adminindex.php">Home</a></li><!--Link for the Home button-->
                <li><a href="logout.php">LogOut</a></li><!--Link for the logout button-->
            </ul>
        </nav>
        <img src="images/banners/randombanner.php" />
        <main><!--Starting of the main-->
            
            <nav><!--Starting of the navigation-->
                <ul>
                    
            </nav><!--Ending of the navigation-->

            <article><!--Starting of the article-->

                    
<?php
    require 'connect.php';//Connecting with the database.
    if (isset($_GET['id'])) {// Codes to get the id from the '<a href="deletingCategory.php?id='.$row['job_id']
        $id =$_GET['id'];
        $result =$pdo->query("DELETE FROM addJob WHERE 
        job_id = '$id'");
        if($result) echo 'Successfully Deleted'.'<br/>';//Information if the operation is sucess or not.
        else echo 'Cannot deleted';
    }

?>
<div style = "text-align:center;">
<h2>Adding Jobs</h2>
<table border="1" cellpadding="2" cellspacing="1.5"><!--CSS of the table-->
    <tr> <!--Stored the data  from the database in the tabular form in this named column-->
        <th>Job Id</th>
        <th>Category Name</th>
        <th>Type Name</th>
        <th>Location</th>
        <th>DeadLine</th>
        <th>Description</th>
        <th onclick="location.deletingCategory.php='deletingCategory.php'">DeletingPage</th><!--Clickable link having DeletingPage name-->
    

    </tr>



<?php
$results = $pdo->query('SELECT * FROM addjob');//Selecting the total records from the addjob table.
    foreach ($results as $row) { //Retrived information is stored in the tabular forms.
        echo '<tr>';
        echo '<td>'.$row['job_id'].'</td>';
        echo '<td>'.$row['category_name'].'</td>';
        echo '<td>'.$row['type_name'].'</td>';
        echo '<td>'.$row['location'].'</td>';
        echo '<td>'.$row['deadLine'].'</td>';
        echo '<td>'.$row['description'].'</td>';
        echo '<td>'.'<a href="deletingCategory.php?id='.$row['job_id'].'">Delete</a></li>'.'</td>';//This is the code for the clickable link stored in the table.

       echo '</tr>';

}

?>
            </article><!--Ending of the article-->
        </main><!--Ending of the main section-->

        <footer>
            &copy; Bob's Tech Jobs<?php echo date("Y");?><!--TCodes for the footer section also having the date function-->
        </footer>

    </body><!--Ending of the body-->
</html><!--Ending of the html -->




