<?php

include '../../connect.php';
session_start();

if($_SESSION['Login'] == 'Asisten')
{
    $praktikum = $_POST['praktikum'];
    $asisten = $_POST['asisten'];
    $status = $_POST['status'];
    $keterangan = $_POST['keterangan'];

    $query = mysql_query("insert into absen_asisten values('$praktikum','$asisten','$status','$keterangan')");

    if($query)
    {
        header('location:index.php?id='.$praktikum);
    }
     else {
         $x = mysql_error();
         echo "$x";
         header('location:index.php?id='.$praktikum.'&err=1');
    }
}
else
{
    header('location:../index.php');
}
?>