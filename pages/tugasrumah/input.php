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
include '../../connect.php';
session_start();

if($_SESSION['Login'] == "Asisten")
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
                <!-- /.dropdown -->
                <ul class="nav navbar-top-links navbar-right">               
                    <li class="divider"></li>
                    <li><a href="../logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
                    <!-- /.dropdown-user -->
                
                <!-- /.dropdown -->
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
                            <a href="../index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Jadwal<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="../jadwal/index.php">Data Jadwal</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
			<li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Absen<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Form <span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li>
                                            <a href="../absenasisten/index.php">Absen Asisten</a>
                                        </li>
                                        <li>
                                            <a href="../absenpraktikan/index.php"> Absen Praktikan</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                                    <a href="#">Input <span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li>
                                            <a href="../absenasisten/input.php">Absen Asisten</a>
                                        </li>
                                        <li>
                                            <a href="../absenpraktikan/input.php"> Absen Praktikan</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>
                            </ul>
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
                                        <li>
                                            <a href="../nilaiakhir.php">Nilai</a>
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
                <?php
                if(isset($_GET['praktikum']))
                {
                    $x = $_GET['praktikum'];
                    $no = $_GET['praktikum'];

                ?> 
                    <div class="col-lg-12">
                        <h1 class="page-header">Input Tugas Rumah</h1>
                        <form role="form" name="form_input" method="post" action="store.php">
                            <div class="form-group form-inline">
                                <label>Praktikum : </label>
                                <input class="form-control" name="prak" value="<?php echo $_GET['praktikum'];?>" type="text" readonly="">
                            </div>
                            
                            <div class="form-group form-inline">
                                <label>Praktikum : </label>
                                <input class="form-control" name="no" value="<?php echo $_GET['no'];?>" type="number" readonly="">
                            </div>
                            
                            <br>
                            <?php
                            $praktikumSelectt = mysql_query("select * from praktikum where Id_Praktikum = '$x'");
                            while ($row1 = mysql_fetch_array($praktikumSelectt)) {
                               $kelompok = $row1['Id_Jadwal'];
                            }
                            
                            $y = 1;
                            $query2 = mysql_query("select * from praktikan where Kelompok =$kelompok");
                            while ($row2 = mysql_fetch_array($query2)) {
                                ?>
                                <div class="form-inline">
                                    <div class="form-group">
                                        <label>Id Praktikan : </label>
                                        <input class="form-control" name="id<?php echo "$y"; ?>" type="text" value="<?php $z= $row2['Nim'];echo "$z "; ?>" readonly="">
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Praktikan : </label>
                                        <input class="form-control" name="nama<?php echo "$y"; ?>" type="text" value=" <?php $nama= $row2['Nama'];echo "$nama "; ?>" readonly="">
                                    </div>
                                    <div class="form-group">
                                        <label>Nilai : </label>
                                        <input class="form-control" name="nilai<?php echo "$y"; ?>" type="number" required="">
                                    </div>
                                </div>    
                            <br>
                            <?php $y++; }?>
                            
                            <div class="form-group">
                                <input class="form-control" name="jumlah" value="<?php echo "$y"; ?>" type="hidden">
                            </div>
                            <br>
                                <button type="submit" class="btn btn-default">Submit</button>
                                <button type="reset" class="btn btn-default">Reset</button>
                        </form>
                    </div>
                    <!-- /.col-lg-12 -->
                <?php } else { ?>
                    <div class="col-lg-6">
                        <h1 class="page-header">Tugas Rumah</h1>
                        <form role="form" name="pilih" method="get" action="">
                            <div class="form-group">
                                <label>Praktikum : </label>
                                <select name="praktikum" class="form-control">
                                <?php 
                                $query = mysql_query('select Id_Praktikum from praktikum');
                                while ($row = mysql_fetch_array($query)) {
                                    echo '<option value="'.$row['Id_Praktikum'].'">'.$row['Id_Praktikum'].'</option>';
                                }
                                ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <input class="form-control" name="no" value="" type="number" required="">
                            </div>
                            <button type="submit" class="btn btn-default">Submit</button>
                        </form>
                    </div>
                <?php } ?>
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
} 
else
{
    header("location:../index.php");
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
