<?php include '../../connect.php'; ?>
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

            <?php 
            if(isset($_SESSION['Login']))
            {
            ?>
            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <ul class="nav navbar-top-links navbar-right">
                        <li class="divider"></li>
                        <li><a href="../logout.php"> Logout</a></li>    
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->
            <?php 
            }
            else 
            {
            ?>
            <ul class="nav navbar-top-links navbar-right">
                <li class="divider"></li>
                    <li><a href="../login.php"> Login</a>
                </li>
            </ul>    
            <?php
            }
            ?>

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
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Nilai<span class="fa arrow"></span></a>
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
                                            <a href="../tugaspraktikum/input.php">Input Tugas Praktikum</a>
                                        </li>
                                        <li>
                                            <a href="../tugasrumah/input.php"> Input Tugas Rumah</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>
                            </ul>
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
                    <div class="col-lg-4">
                        <h1 class="page-header">Absen Praktikan</h1>
                        <br>
                        <select class="form-control" name="menu" onchange="document.location.href=this.options[this.selectedIndex].value;">
                            <option value="#">Pilih Praktikum</option>                        
                            <?php
                            $query = mysql_query("select Id_Praktikum from praktikum");
                            while ($row = mysql_fetch_array($query)) {
                                echo '<option value="../absenpraktikan/index.php?id='.$row['Id_Praktikum'].'">'.$row['Id_Praktikum']."</option>";
                            }
                            ?>
                        </select>
                        <br>
                        <br>
                    </div>
                    <!-- /.col-lg-4 -->
                    <div class="col-lg-12">
                        <?php
                        if(isset($_GET['err']))
                        {
                            echo 'tidak bisa mengisi absen, karena absen sudah pernah diisi sebelumya';
                        }
                        ?>
                        <?php
                        if(isset($_GET['id']))
                        {
                        ?>
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Nama</th>
                                        <th>Status</th>
										
                                        <!--<th>Action</th>-->
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    <?php 
                                    $x = $_GET['id'];
                                    $absen = mysql_query("select * from praktikan right join absen_praktikan on absen_praktikan.Nim = praktikan.Nim where absen_praktikan.Id_Praktikum = '$x'");
                                    while ($row = mysql_fetch_array($absen)) {
                                        echo "<tr>";                                
                                        echo "<td>".$row['Nim']."</td>";                                
                                        echo "<td>".$row['Nama']."</td>";                                
                                        echo "<td>".$row['Status']."</td>";                                
                                                                      
                                        //echo '<td><a href="edit.php?id='.$row['Nim'].'"> Edit </a>';                                
                                        //echo ' - ';                                
                                        //echo '<a href="delete.php?id='.$row['Nim'].'"> Delete </a></td>';                                
                                        echo "</tr>";                                
                                    }   
                                    ?>

                                </tbody>
                            </table>
                        <?php
                        }
                        ?>
                        
                    </div>
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
