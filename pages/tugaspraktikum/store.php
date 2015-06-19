<?php

include '../../connect.php';
session_start();

if($_SESSION['Login'] == 'Asisten')
{
    $x=1;
    while ($x < $_POST['jumlah'])
    {
        $id = 'id'.$x;
        $input_id = $_POST[$id];
        $nama = 'nama'.$x;
        $input_nama = $_POST[$nama];
        $nilai = 'nilai'.$x;
        $input_nilai = $_POST[$nilai];
        $praktikum = $_POST['prak'];
        $no = $_POST['no'];
        
    $status = "belum disetujui";
    
    $query = mysql_query("insert into tugas_praktikum values('$input_id','$praktikum','$no','$input_nilai','$status')");

        if($query)
        {
            echo "sukses";        
        }
         else {
             $y = mysql_error();
             echo "$y";
        }
        $x++;
    }
    header('location:index.php?id='.$praktikum);

}
else
{
    header('location:../index.php');
}
?>