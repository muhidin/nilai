<?php
$host = 'localhost';
$userdb = 'root';
$passdb = '';
$db = 'yt_nilai';

//Procedural Style
$con = mysqli_connect($host, $userdb, $passdb, $db);  
// Check connection
if (mysqli_connect_errno()) {
    echo "Kesalahan pada koneksi MySQL: " . mysqli_connect_error();
    exit();
}

//Object-oriented Style
//$con = new mysqli($host, $userdb, $passdb, $db);  
// if ($mysqli -> connect_errno) {
//     echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
//     exit();
//   }
?>
