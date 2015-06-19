<?php

include '../../connect.php';
session_start();

if($_SESSION['Login'] == 'Admin')
{
$x=0;
    while ($x < $_POST['jumlah'])
    {
        $id = 'id'.$x;
        $input_id = $_POST[$id];
        $nama = 'nama'.$x;
        $input_nama = $_POST[$nama];
        $kelompok = $_POST['kelompok'];
        $query = mysql_query("insert into praktikan values('$input_id','$input_nama','$kelompok')");
        $x++;
        if($query)
        {
            echo "sukses";
            header('location:index.php?id='.$kelompok);
        }
        else 
        {
             $x = mysql_error();
             echo "$x";
             header('location:index.php?err=store');
        }
    }
    header('location:index.php?id='.$kelompok);
    
}
else
{
   // header('location:index.php');
}


?>