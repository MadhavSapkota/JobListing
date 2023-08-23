<!-- This is the code for checking the username and password when the user try to login in the userLogin section -->
<!-- Name:Madhav Sapkota
UNID:17429433 
Web_resit1
-->

<!DOCTYPE html>
<html>    <!--This is the opening of the html-->
	<head>   <!--This is the opening of the head-->
		<link rel="stylesheet" href="styles.css"/>    <!--This links the relation between the css and the html file-->
		<title>Northampton News - Home</title>
	</head>       <!--This is the opening of the head-->
	<body>       <!--This is the opening of the body part-->
		<header>    <!--This is the opening of the header part-->

			<section>    <!--This is the opening of the section-->
				<h1>Northampton News</h1> 
			</section>      <!--This is the closing portion of the section part-->
      <a href="logout.php">Logout</a>
		</header>    <!--This is the closing part of the header-->
		<main>        <!--This is the opening portion of the main part-->
			<article>    <!--This is the opening part of the article-->
				<h2>Login</h2>
        <section>

   <p><a href="signuser.php">SignIn</a></p>

</section>
        <?php
        session_start();//This is the starting portion of the session
				require 'connect.php';
        if(!empty($_POST['username'])&&!empty($_POST['password'])){//This is the code for checking whether the username and the password is empty or not
          if(isset($_POST['login'])){//Following actions are executed when the submit button is clicked
            $storage=$pdo->prepare("SELECT * FROM userlogin WHERE username=:username AND password=:password");
            $priority=[
             'username'=>$_POST['username'],
             'password'=>$_POST['password']

           ];
           $storage->execute($priority);//Perform the following task when the submit button is clicked.
           if($storage->rowCount()>0){
             $data=$storage->fetch();
             $_SESSION['password']=$data['password'];
             $_SESSION['username']=$data['username'];
             header('location:index1.php');//This shows the index page


           }
           else{
             echo '<script>'.'alert("Error in the username and password.Correct and again login");'.'</script>';//This is the dialogue box to show the error message 

           }
          }
        }
        if(isset($_SESSION['userid'])){//This is for checking the condition
          header('location:index.php');//Home page is displayed
        }

        ?>

        <script>

         function review(form){//This is called for the function review
           var stage=true;//This is for intializing the variable.
           if(form.username.value==''){//This is for checking the condition
             form.username.focus();
             stage=false;
           }
          if(form.password.value==''){//This is also for checking the condition.
                form.password.focus();
                 stage=false;//This is for giving the varibale value to false.
           }
           if(stage==false){//This is for checking the condition
             alert('Enter in all the values in the fields');//Here alert function is placed
             return false;//This return false.
           }
         }

         </script>

        <form class="login" action="" method="post" onsubmit="return review(this)"><!--Here form is created-->
          <label>Username:</label><!--creation of the form attributes-->
          <input type="text" name="username" placeholder="Username"><br><br><!--This is for creating the field to enter the value-->
          <label>Password:</label>
          <input type="password" name="password" placeholder="Password"><br><br><!--This is also for creating the field to enter the value -->
          <input class="loginSubmit" type="submit" name="login" value="Login"><!--This is for creating the login button-->
        </form>

			</article>
      <!--Here article body is closed-->


		</main><!--Main body is closed here-->
		<footer><!--Here footer is opened-->
			&copy; Northampton News
			<?php
				echo date('Y');
			 ?>
		</footer><!--This is for the closing part of the footer-->
	</body><!--For the closing part of the body-->
</html><!--For the closing part of the html-->
