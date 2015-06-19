<?php

include '../../connect.php';
session_start();

if($_SESSION['Login'] == 'Admin')
{
    $edit = $_POST['nimLama'];
    $nim = $_POST['nimBaru'];
    $nama = $_POST['nama'];
    $kelompok = $_POST['kelompok'];

    $query = mysql_query("update praktikan set Nim='$nim', Nama='$nama', Kelompok='$kelompok' where Nim = '$edit'");

        if($query)
        {
            echo "sukses";
            header('location:index.php?id='.$kelompok);
        }
        else 
        {
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