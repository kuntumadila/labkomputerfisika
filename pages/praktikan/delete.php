<?php


include '../../connect.php';
session_start();

if($_SESSION['Login'] == 'Admin')
{
    $id = $_GET['id'];
    $kelompok = $_GET['kel'];

    $query = mysql_query("delete from praktikan where Nim = '$id'");
        if($query)
        {
            echo "sukses";
            header('location:index.php?id='.$kelompok);
        }
        else 
        {
             $x = mysql_error();
             echo "$x";
             header('location:index.php?err=del');
        }
}   
else
{
    header('location:../index.php');
}

?>