<?php 
include '../../connect.php';
$Edit_id = $_GET['id'];
$Edit_praktikum = $_GET['idp'];
$no = $_GET['no'];
$edit = mysql_query("select * from tugas_praktikum where Nim='$Edit_id' and Id_Praktikum ='$Edit_praktikum' and no ='$no'");
while ($row = mysql_fetch_array($edit)) {
    $ida = $row['Nim'];
    $idprak = $row['Id_Praktikum'];
    $nilai = $row['Nilai'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Laboratorium Komputer Jurusan Fisika</title>

    <!-- Bootstrap Core CSS -->
    <link href="../../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<?php
session_start();
if($_SESSION['Login'] == 'Asisten' || $_SESSION['Login'] == 'PJ')
{
?>
    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../index.php">Home</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="divider"></li>
                <li><a href="../logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                </li>                 
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Jadwal<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="jadwal/index.php">Data Jadwal</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
			<li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Absen<span class="fa arrow"></span></a>
                            
                            <!-- /.nav-second-level -->
                        </li>
			<li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Tugas<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Form <span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li>
                                            <a href="../tugaspraktikum/index.php">Tugas Praktikum</a>
                                        </li>
                                        <li>
                                            <a href="../tugasrumah/index.php"> Tugas Rumah</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                                    <a href="#">Input <span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li>
                                            <a href="../tugaspraktikum/input.php">Tugas Praktikum</a>
                                        </li>
                                        <li>
                                            <a href="../tugasrumah/input.php"> Tugas Rumah</a>
                                        </li>
                                        <li>
                                            <a href="../nilaiakhir.php">Nilai</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Edit Nilai</h1>
                        <form role="form" name="form_edit" method="post" action="update.php">
                            <div class="form-group">
                                <label>Nim : </label>
                                <input name="id" class="form-control" value="<?php echo "$ida"; ?>" id="disabledInput" type="text" readonly="">
                                <!--<input name="id" class="form-control" id="disabledInput" type="text" placeholder="<?php //echo "$id" ;?>" disabled>-->
                            </div>
                            <div class="form-group">
                                <label>ID Praktikum : </label>
                                <input name="prak" class="form-control" value="<?php echo "$idprak"; ?>" type="text" readonly="">
                            </div>
                            <div class="form-group">
                                <label>No : </label>
                                <input name="no" class="form-control" value="<?php echo "$no"; ?>" type="text" readonly="">
                            </div>
                           <div class="form-group">
                                <label>Nilai : </label>
                                <input name="nilai" class="form-control" value="<?php echo "$nilai"; ?>" type="number" required="">
                            </div>
                            <button type="submit" class="btn btn-default">Edit</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        </form>
                        
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
<?php
} else
{
    header('location:../index.php');
}
?>
    <!-- jQuery -->
    <script src="../../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../../dist/js/sb-admin-2.js"></script>

</body>

</html>
