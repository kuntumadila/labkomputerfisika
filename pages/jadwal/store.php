<?php

include '../../connect.php';
session_start();

if($_SESSION['Login'] == 'Admin')
{
    $id = $_POST['id'];
    $hari = $_POST['hari'];
    $mulai = $_POST['mulai'];
    $selesai = $_POST['selesai'];

    $query = mysql_query("insert into jadwal values('$id','$hari','$mulai','$selesai')");

    if($query)
    {
        header('location:index.php');
    }
     else {
         $x = mysql_error();
         echo "$x";
         header('location:index.php?err=inp');
    }
    
}
 else {
    header('location:../index.php');    
}
?>