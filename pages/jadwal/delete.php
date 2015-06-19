<?php

include '../../connect.php';
session_start();

if($_SESSION['Login'] == 'Admin')
{
    $id = $_GET['id'];

    $query = mysql_query("delete from jadwal where Id_Jadwal = '$id'");   
 
    if($query)
    {
        header('location:index.php');
    }
     else {
         $x = mysql_error();
         echo "$x";
         header('location:index.php?err=del');
    }
}
else
{
    header('location:../index.php');
}
?>