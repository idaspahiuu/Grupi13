//dbconfig
<?php
define("servername","localhost");
define("username","root");
define("password","");
?>

//dbstore
<?php
require("dbconfig.php");


$conn = mysqli_connect(servername, username, password); 
if (!$conn) {  
   die("Connection failed: " . mysqli_error($conn)); 
}

$sql = 'CREATE Database Store';

$retval = mysqli_query( $conn, $sql );
if(! $retval )
{
die('Could not create database: ' . mysqli_error($conn));
}
echo "Database Store created successfully\n";
mysqli_close($conn);
?>

//konektimi
<?php 

$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password); 
if (!$conn) {  
   die('Nuk mund te konektohet databaza: ' . mysqli_error($conn)); 
}
echo "Databaza u konektua";
mysqli_close($conn);

?>
 
//konektimi me dbname
<?php
define("servername","localhost");
define("dbname","store");
define("username","root");
define("password","");


$connect = mysqli_connect(servername, username, password, dbname); //shtojme 'dbname' 
if (!$connect) {  
   die("Connection failed: " . mysqli_connect_error()); 
}

?>

