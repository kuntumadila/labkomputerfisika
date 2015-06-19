<?php

include '../../connect.php';
session_start();

if($_SESSION['Login'] == 'Admin')
{
    $id = $_POST['id'];
    $nama = $_POST['nama'];

    $query = mysql_query("insert into asisten values('$id','$nama')");

    if($query)
    {
        echo "sukses";
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
?>