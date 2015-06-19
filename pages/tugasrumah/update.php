<?php

include '../../connect.php';
session_start();

if($_SESSION['Login'] == 'Asisten')
{
    $id = $_POST['id'];
    $prak = $_POST['prak'];
    $no = $_POST['no'];
    $nilai = $_POST['nilai'];

    $query = mysql_query("update tugas_rumah set Nilai='$nilai' where Nim = '$id' && Id_Praktikum ='$prak' And no ='$no' ");

    if($query)
    {
        header('location:index.php?id='.$prak);
    }
     else {
         $x = mysql_error();
         echo "$x";
        header('location:index.php'); 
    }
}
else
{
    header('location:../index.php');
}
?>