<?php

include '../../connect.php';
session_start();

if($_SESSION['Login'] == 'Asisten')
{
    $x=1;
    while ($x < $_POST['jumlah'])
    {
        $praktikum = $_POST['prak'];
        $id = 'id'.$x;
        $input_id = $_POST[$id];
        $nama = 'nama'.$x;
        $input_nama = $_POST[$nama];
        $status = 'status'.$x;
        $input_status = $_POST[$status];
        $input_nama = $_POST[$nama];
        $keterangan = 'keterangan'.$x;
        $input_keterangan = $_POST[$keterangan];

        $query = mysql_query("insert into absen_praktikan values('$input_id','$praktikum','$input_status','$keterangan')");

        if($query)
        {
            echo "sukses";
            header("location:index.php?id=".$praktikum);
        }
         else {
             $z = mysql_error();
             echo "$z";
             header("location:index.php?err=1");
        }
        $x++;
    }
    //header("location:index.php");
}
else
{
    header('location:../index.php');
}
?>