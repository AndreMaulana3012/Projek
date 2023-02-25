<?php
$host="localhost";
$user="root";
$password="";
$db="db_user";

$conn = mysqli_connect($host,$user,$password,$db);
if (!$conn){
	  die("Koneksi gagal:".mysqli_connect_error());
}

?>