<?php

include '../../connect.php';
session_start();

if($_SESSION['Login'] == 'Asisten')
{
    $id = $_GET['id'];
    $idp = $_GET['idp'];

    $query = mysql_query("delete from tugas_rumah where Nim = '$id' and Id_Praktikum = '$idp'");

   if($query)
    {
        header('location:index.php?id='.$idp);
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