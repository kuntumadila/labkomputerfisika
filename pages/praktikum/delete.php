<?php

include '../../connect.php';
session_start();

if($_SESSION['Login'] == 'Admin')
{
    $id = $_GET['id'];

    $query = mysql_query("delete from praktikum where Id_Praktikum= '$id'");   
 
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
    header('location:../login.php');
}
?>