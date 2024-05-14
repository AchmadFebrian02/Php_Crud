<?php
  $host = 'localhost';
  $user = 'root';
  $pass = '';
  $db = 'db_mahasiswa';

  $conn = mysqli_connect($host, $user, $pass, $db);

  if($conn){
    // echo "berhasil konek";  
  }
  
  mysqli_select_db($conn, $db);
?>