<?php

include '../../connect.php';
session_start();

if($_SESSION['Login'] == 'PJ')
{

    $kel = $_GET['kel'];

    $query = mysql_query("update tugas_rumah set status='disetujui' where Id_praktikum='$kel'");

    if($query)
    {
        header('location:index.php');
    }
     else {
         $x = mysql_error();
         echo "$x";
         header('location:index.php?err=kon'); 
    }
}
else
{
    header('location:../index.php');
}
?>