<?php

include '../../connect.php';
session_start();

if($_SESSION['Login'] == 'Admin')
{
    $id = $_POST['id'];
    $modul = $_POST['modul'];
    $jadwal = $_POST['jadwal'];
    $semester = $_POST['semester'];
    $tanggal = $_POST['tanggal'];
    $keterangan = $_POST['keterangan'];

    $query = mysql_query("insert into praktikum values('$id','$semester','$modul','$jadwal','$tanggal','$keterangan')");

    if($query)
    {
        header('location:index.php');
    }
     else {
         $x = mysql_error();
         echo "$x";
         header('location:index.php?err=inp');
    }
    header('location:index.php');
}
else
{
    header('location:../index.php');
}
?>