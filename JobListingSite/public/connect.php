<!-- This is the code  for the database connection--> 
<!-- Name:Madhav Sapkota
UNID:17429433 
Web_resit1
-->
<?php
$server = 'localhost';
$username = 'student';
$password = 'student';

$schema = 'web_resit';

$pdo = new PDO('mysql:dbname=' . $schema . ';host=' . $server, $username, $password, [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
?>