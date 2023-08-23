
<!-- This is the code for adding the category  -->
<!-- Name:Madhav Sapkota
UNID:17429433 
Web_resit1
This is the userloginpassword check
-->
<?php
session_start();
if(isset($_SESSION['AdminId'])){//if the userid is the required user id then the homepage.php file is opened

}
     require 'connect.php';
     if(!empty($_POST['username'])&&!empty($_POST['password'])){
      echo 'checks the requirement';
    }

if (isset($_POST['submit'])) {
   

    $stmt = $pdo->prepare("SELECT * FROM userlogin WHERE user_id =:user_id"); 

    $criteria = [
        'user_id' => $_POST['user_id']
        // 'password' =>$_POST['password']
    ];

    $stmt->execute($criteria);
    $error = false;
    if($stmt->rowCount()>0){   //Code to check the password
         $row = $stmt->fetch();
         if (password_verify($_POST['password'], $row['password'])) {
        $_SESSION['AdminId'] = $row['user_id'];
        header('location:index.php');
      }
      else{
         $error = true;
      }
    }

         // if($_SESSION['AdminId'] =$row['user_id'] && $_SESSION['username'] =$row['username']){
         //    header('location:index.php');
         // }
     }
        
    else {
            $error = true;
          }

      if($error) echo '<script>'.'alert("Sorry,username and the password are invalid.Put valid username and password);'.'</script>';
    

  
?>

<script>
//this code checks the validity of the username and password
function valid(form){
  var status=true;//initial status of this variable is true
  if(form.username.value==''){//checks the condition
    form.username.focus();
    status = false;//if the condition is true the status variable is assignment to false
  }
  if(form.password.value==''){//checks the condition
    form.password.focus();
    status = false;//if the condition is true the status variable is assignment to false
  }
  if(status==false){//checks the condition
    alert('You did not enter in all the fields....Please enter values in all the fields');//if the condition is true this dialogue box appears
    return false;//return false
  }
}
</script>
<?php    
     require 'userlogin.php';


?>