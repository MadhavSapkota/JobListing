<!-- This is the code for adding the category  -->
<!-- Name:Madhav Sapkota
UNID:17429433 
Web_resit1
Logout for user section.
-->
<?php
	session_start();
	session_unset();
	session_destroy();
	header('location:index.php');
 ?>