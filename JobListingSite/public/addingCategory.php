<!-- This is the code for adding the category  -->
<!-- Name:Madhav Sapkota
UNID:17429433 
Web_resit1
-->
<?php
    require 'header.php';//This is the code for linking the header.php file in this file.
?> 
</section>
        </header>
        <nav>
            <ul>
                <li><a href="adminindex.php">Home</a></li> <!--when you click the Home button ,admin index is opened-->
               <!--  <li><a href="#">All jobs</a></li> -->
                <!-- <li><a href="#">Search by category</a> -->
                    <!-- <ul>
                        <li><a href="#">Category 1</a></li>
                        <li><a href="#">Category 2</a></li>
                        <li><a href="#">Category 3</a></li>
                    </ul>
                </li> -->
                <li><a href="#">Contact us</a></li>
            </ul>
        </nav>
        <img src="images/banners/randombanner.php" />
        <main>
           
             <nav> </nav><!--Starting and ending part of the navigation part-->

             <article>
                    <br>Please fill the form below:<br/><!--This is the notify sentences for user-->
                <form action="addingCategory.php" method="POST"><!--This is the starting point of the form part-->
                        <label>AddCategory:</label><input type="text" name="category_name"><!--This is the field to add the category name-->
                        <input type="submit" name="submit" value="Submit" /><!--This is for the submit button-->
                </form>
            </article><!--This is the end portion of the article-->
        </main><!--This is the end portion of the main of the html code-->

        <footer><!--This is the starting part of the footer-->
            &copy; Bob's Tech Jobs<?php echo date("Y");?><!--This is the footer part which has included the date function to show the current year-->
        </footer><!--This is the end poortion of the footer-->

    </body>
</html><!--This is the end point of the html section-->






<?php

require 'connect.php';//This is the connection code for the database.
if (isset($_POST['submit'])) {
    $stmt = $pdo->prepare("INSERT INTO addjob(job_id, category_name)         
      VALUES(:job_id, :category_name)");//This is the code for inserting the values in the database and when the database is connected following operation is carried out.

    $criteria = [
                'job_id' => '',
                'category_name' =>$_POST['category_name'],

            ];

   if( $result =$stmt->execute($criteria)){
    echo 'Record Added';//This is the result appeared when the category is added.
   }

}


?>
