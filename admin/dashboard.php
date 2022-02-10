<?php 

  session_start();

  if ($_SESSION['login'] != "login"){
    header("location:../login.php");
  }

  error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
  include_once "../koneksi/koneksi.php";
?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>E-SURAT</title>
  <link rel="icon" href="../image/hst.png">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="../assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../assets/bower_components/Ionicons/css/ionicons.min.css">
  
  <link rel="stylesheet" href="../assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="../assets/bower_components/select2/dist/css/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
  <link rel="stylesheet" href="../assets/dist/css/skins/skin-blue.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="dashboard.php?page=dashboard" class="logo">
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>E-</b>SURAT</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          

          <!-- Notifications Menu -->
          <li class="dropdown notifications-menu">
            <!-- Menu toggle button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-user"></i>
              Hi, <?= $_SESSION['nama'] ?>
            </a>
            <ul class="dropdown-menu">
              <li>
                <!-- Inner Menu: contains the notifications -->
                <ul class="menu">
                  <li><!-- start notification -->
                    <a href="../logout.php">
                      <i class="fa fa-sign-out text-warning"></i> Logout
                    </a>
                  </li>
                  <!-- end notification -->
                </ul>
              </li>
            </ul>
          </li>
          
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <?php 
      
        $thispage = $_GET['page'];

      ?>
      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <!-- Optionally, you can add icons to the links -->
        <li class="<?php if ($thispage == "dashboard"){ ?>active <?php } ?>"><a href="?page=dashboard"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
        <li class="<?php if ($thispage == "tahun"){ ?>active <?php } ?>"><a href="?page=tahun"><i class="fa fa-calendar"></i> <span>Tahun</span></a></li>
        <li class="<?php if ($thispage == "masuk"){ ?>active <?php } ?>"><a href="?page=masuk"><i class="fa fa-mail-forward"></i> <span>Surat Masuk</span></a></li>
        <li class="<?php if ($thispage == "keluar"){ ?>active <?php } ?>"><a href="?page=keluar"><i class="fa fa-mail-reply"></i> <span>Surat Keluar</span></a></li>
        <li class="<?php if ($thispage == "laporan"){ ?>active <?php } ?>"><a href="?page=laporan"><i class="fa fa-file-text-o"></i> <span>Laporan</span></a></li>
        <li class="<?php if ($thispage == "profile"){ ?>active <?php } ?>"><a href="?page=profile"><i class="fa fa-user-md"></i> <span>Profile Setting</span></a></li>
        
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <?php 
      $page = $_GET['page'];

      if ($page == "dashboard"){
        ?><h1>Dashboard</h1><?php
      }elseif ($page == "tahun"){
        ?><h1>Tahun</h1><?php
      }elseif ($page == "masuk"){
        ?><h1>Surat Masuk</h1><?php
      }elseif ($page == "keluar"){
        ?><h1>Surat Keluar</h1><?php
      }elseif ($page == "laporan"){
        ?><h1>Laporan Surat Masuk dan Keluar</h1><?php
      }
      elseif ($page == "profile"){
        ?><h1>Setting Profile</h1><?php
      }
      ?>
      
      
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

      <?php 
      
      $page = $_GET['page'];
      $aksi = $_GET['aksi'];

      if ($page == "tahun"){
        if ($aksi == ""){
          include "page/tahun/tahun.php";
        }

        if ($aksi == "tambah"){
          include "page/tahun/tambah.php";
        }

        if ($aksi == "edit"){
          include "page/tahun/edit.php";
        }

        if ($aksi == "hapus"){
          include "page/tahun/hapus.php";
        }
      }

      if ($page == "masuk"){
        if ($aksi == ""){
          include "page/surat_masuk/surat_masuk.php";
        }

        if ($aksi == "tambah"){
          include "page/surat_masuk/tambah.php";
        }

        if ($aksi == "edit"){
          include "page/surat_masuk/edit.php";
        }

        if ($aksi == "hapus"){
          include "page/surat_masuk/hapus.php";
        }
      }

      if ($page == "keluar"){
        if ($aksi == ""){
          include "page/surat_keluar/surat_keluar.php";
        }

        if ($aksi == "tambah"){
          include "page/surat_keluar/tambah.php";
        }

        if ($aksi == "edit"){
          include "page/surat_keluar/edit.php";
        }

        if ($aksi == "hapus"){
          include "page/surat_keluar/hapus.php";
        }
      }

      if ($page == "laporan"){
        if ($aksi == ""){
          include "page/laporan/laporan.php";
        }
      }

      if ($page == "profile"){
        if ($aksi == ""){
          include "page/profile/profile.php";
        }

        if ($aksi == "tambah"){
          include "page/profile/tambah.php";
        }

        if ($aksi == "edit"){
          include "page/profile/edit.php";
        }

        if ($aksi == "hapus"){
          include "page/profile/hapus.php";
        }
      }

      if ($page == "dashboard"){
        include "page/dashboard.php";
      }

      ?>

    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
      <!--------------------------
        | Your Page Content Here |
        -------------------------->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      By Teguh Maulana Saputera
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2021 <a href="dashboard.php?page=dashboard">Kelurahan Pantai Hambawang Barat</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane active" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:;">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:;">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="pull-right-container">
                    <span class="label label-danger pull-right">70%</span>
                  </span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="../assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="../assets/dist/js/adminlte.min.js"></script>

<script src="../assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- Select2 -->
<script src="../assets/bower_components/select2/dist/js/select2.full.min.js"></script>


<script>
  
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })

  
</script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->


</body>
</html>