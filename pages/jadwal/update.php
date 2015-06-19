<?php

include '../../connect.php';
session_start();

if($_SESSION['Login'] == 'Admin')
{
    $id = $_POST['id'];
    $hari = $_POST['hari'];
    $mulai = $_POST['mulai'];
    $selesai = $_POST['selesai'];

    $query = mysql_query("update jadwal set Id_Jadwal='$id', Hari='$hari', Mulai='$mulai', Selesai='$selesai' where Id_Jadwal = '$id'");

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
    header('location:../login.php');
}
?>
