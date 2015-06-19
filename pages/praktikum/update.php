<?php

include '../../connect.php';
session_start();

if($_SESSION['Login'] == 'Admin')
{
    $id = $_POST['id'];
    $modul = $_POST['modul'];
    $jadwal = $_POST['jadwal'];
    $tanggal = $_POST['tanggal'];
    $keterangan = $_POST['keterangan'];

    $query = mysql_query("update praktikum set Id_Praktikum='$id', Modul='$modul', Id_Jadwal='$jadwal', Tanggal='$tanggal', Keterangan='$keterangan' where Id_Praktikum = '$id'");

    if($query)
    {
        header('location:index.php');
        
    }
     else {
         $x = mysql_error();
         echo "$x";
         header('location:index.php?err=upd');
    }
    
}
else
{
    header('location:../index.php');
}
?>
