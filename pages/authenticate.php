<?php

session_start();
include '../connect.php';
$user = $_POST['username'];
$pass = $_POST['password'];

$query = mysql_query("select * from login where Username = '$user' and Password = '$pass'");
$jumlah = mysql_num_rows($query);

if($jumlah == 1)
{
    while ($row = mysql_fetch_array($query)) {
      $username = $row['Username'];  
      $type = $row['Status'];  
    }
    
    $_SESSION['Login'] = $type;
    header("location:index.php");
}
else
{
    header("location:login.php");
}

//echo $_SESSION['Login'];


?>