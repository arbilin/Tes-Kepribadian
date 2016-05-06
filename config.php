<?php
//File PHP berikut berfungsi untuk mengkoneksikan halaman web dengan database mysql
  $host="br-cdbr-azure-south-b.cloudapp.net"; 
  $user="b330ec0532bdcb"; 
  $password="0da9feb1"; 
  $database="db_tk"; //Nama database yang akan kita gunakan
  mysql_connect($host,$user,$password);
  mysql_select_db($database);
?>