<?php
$host="localhost";
$user="root";
$password="";
$db="db_chat";

$con = mysqli_connect($host,$user,$password,$db);
if (!$con){
	  die("Koneksi gagal:".mysqli_connect_error());
}

?>