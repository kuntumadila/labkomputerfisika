<?php

include '../../connect.php';
session_start();

if($_SESSION['Login'] == 'Admin')
{
    $id = $_POST['id'];
    $nama = $_POST['nama'];

    $query = mysql_query("update asisten set Id_Asisten='$id', Nama='$nama' where Id_Asisten = '$id'");

    if($query)
    {
        echo "sukses";
        header('location:index.php');
    }
     else {
         $x = mysql_error();
         echo "$x";
         header('location:index.php?err=upd');
    }
        header('location:index.php');
}
 else {
    header('location:../index.php');    
}

?>