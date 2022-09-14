<?php 

// This file is responsible for database connection
// mysqli drive (i) Improved version
$host = 'localhost';
$port = 3306;
$driver = $host.':'.$port; #localhost:3308
$username = 'root';
$password = '';
$dbname = 'form_data';
try{
	$conn = mysqli_connect($driver,$username,$password,$dbname);
	if($conn){
		#echo 'Connection Created';
		}
  }
catch(Exception $e){
	echo 'Connection Error';

}

?>