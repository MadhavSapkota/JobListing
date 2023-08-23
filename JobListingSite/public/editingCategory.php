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
                <!-- <li><a href="#">Search by category</a> -->
                    <!-- <ul> -->
                        <!-- <li><a href="#">Category 1</a></li> -->
                        <!-- <li><a href="#">Category 2</a></li> -->
                        <!-- <li><a href="#">Category 3</a></li> -->
                    <!-- </ul> -->
                </li>
                <!-- <li><a href="#">Contact us</a></li> -->
                <li><a href="logout.php">LogOut</a></li>
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
$server = 'localhost';
$username = 'student';
$password = 'student';

$schema = 'web_resit';

$pdo = new PDO('mysql:dbname=' . $schema . ';host=' . $server, $username, $password, [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);//Database connection code

if(isset($_POST['id'])){//Updates codes
        extract($_POST);
        $result = $pdo->query("UPDATE addjob SET

                            category_name ='$category_name',
                            type_name = '$type_name',
                            location = '$location',
                            deadLine = '$deadLine',
                            description = '$description'

                            WHERE
                                job_id='$id'
                            ");
        if($result) echo 'Update Successfully';
        else echo 'Not update';
    }

?>
<div style = "text-align:center;">
<h2>EditingCategory</h2>
<table border="1" cellpadding="2" cellspacing="1.5">//In the tabular form.
    <tr>
        <th>Job Id</th>
        <th>Category Name</th>
        <th>Type Name</th>
        <th>Location</th>
        <th>DeadLine</th>
        <th>Description</th>
        <th onclick="location.editingCategory.php='editingCategory.php'">Editing</th>
    

    </tr>



<?php
$results = $pdo->query('SELECT * FROM addjob');//Retriving the information from the database.
    foreach ($results as $row) {
        echo '<tr>';
        echo '<td>'.$row['job_id'].'</td>';
        echo '<td>'.$row['category_name'].'</td>';
        echo '<td>'.$row['type_name'].'</td>';
        echo '<td>'.$row['location'].'</td>';
        echo '<td>'.$row['deadLine'].'</td>';
        echo '<td>'.$row['description'].'</td>';
        echo '<td>'.'<a href="editingindex.php?id='.$row['job_id'].'">Edit</a></li>'.'</td>';


       echo '</tr>';

}

?>






















                
                <!-- <p></p> -->

                <!-- <ul>
                    <li>This is a list</li>
                    <li>With multiple</li>
                    <li>List items</li>
                </ul> -->


                  <!-- <br>Please fill the form below:<br/> -->
                    <!-- <form action="deletingCategory.php" method="POST"> -->
                            <!-- <label>DeletingCategory:</label><input type="text" name="category_name"> -->
                           <!-- <label>Deleting Category:</label><select name="category_name"><br/><br/> -->
                            <!-- <option value="Programmer">Programmer</option> -->
                            <!-- <option value="SystemAnalysis">SystemAnalysis</option> -->
                            <!-- <option value="Technical Support">Technical Support</option> -->
                            <!-- <option value="Database Administrator">Database Administrator</option> -->
                            <!-- <option value="Network Administrator">Network Administrator</option> -->
                            <!-- <option value="AI developer">AI developer</option> -->
                    <!-- </select>  -->
                         



                   <!--  <label>Job Type</label><select name="type_name"><br/><br/>
                        <option value="FullTime">FullTime</option>
                        <option value="PartTime">PartTime</option>
                        <option value="Freelancer">Freelancer</option>
                    </select>
 -->
                   <!--  <label>Location</label> <input type="text" name="location"/><br/><br/>
                    <label>Salary</label> <input type="text" /><br/><br/>
                    <label>ZIP</label> <input type="text" /><br/><br/>
                    <label>DeadLine</label><input type="datetime-local"  name="deadLine" /><br/><br/>
                    <label>Description</label><textarea name="description"></textarea>
 -->
                    
                    
                    
                    

                    <!-- <input type="submit" name="delete" value="Delete" /> -->
                <!-- </form> -->
            </article>
        </main>

        <footer>
            &copy; Bob's Tech Jobs<?php echo date("Y");?>
        </footer>

    </body>
</html>










                     <!--   // function deletePerson($pdo, $job_id) {        
                        //     $stmt = $pdo->prepare('DELETE FROM addjob WHERE job_id = :job_id');
                        //     $criteria = [
                        //         'job_id' => $job_id 
                        //     ];
                        //     $stmt->execute($criteria);
                        //      }
                        
                                
                                     






    // $stmt = $pdo->prepare("DELETE category_name FROM addjob WHERE job_id =");
            // $criteria = [
            //     'category_name' => $_POST['category_name'],
            // ];
            // $stmt->execute($criteria);
   // $stmt = $pdo->prepare("DELETE FROM addjob WHERE  $_POST['category_name']");




?>
