<?php

include '../../connect.php';
session_start();

if($_SESSION['Login'] == 'Asisten')
{
    $id = $_POST['id'];
    $prak = $_POST['prak'];
    $nilai = $_POST['nilai'];
    $no = $_POST['no'];

    $query = mysql_query("update tugas_praktikum set Nilai='$nilai' where Nim = '$id' And Id_Praktikum ='$prak' And no ='$no' ");

    if($query)
    {
        header('location:index.php?id='.$prak);
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