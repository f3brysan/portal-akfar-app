
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Portal AKFAR | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/backend/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/backend/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/backend/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/backend/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/backend/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/backend/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/backend/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/backend/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/backend/plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- Date Time Picker -->
  <link href="<?php echo base_url() ?>assets/backend/plugins/date-time-picker/bootstrap.min.css" rel="stylesheet" media="screen">
  <link href="<?php echo base_url() ?>assets/backend/plugins/date-time-picker/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">

  <script src="<?php echo base_url(); ?>assets/backend/ckeditor/ckeditor.js"></script>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?php echo base_url() ?>assets/backend/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Portal <b>AKFAR</b></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url() ?>assets/backend/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a class="d-block"><?php echo $user['nama']; ?> | <?php echo $user['level'] ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?php echo site_url('admin') ?>" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-database"></i>
              <p>
                Master Data
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo site_url('admin/about') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tentang Akfar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo site_url('admin/akademik') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Akademik Akfar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo site_url('admin/kehidupan_kampus') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kehidupan Kampus</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo site_url('admin/ukm') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Unit Kegiatan Mahasiswa</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo site_url('admin/fasilitas') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fasilitas Akfar</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="<?php echo site_url('admin/dosen') ?>" class="nav-link">
              <i class="nav-icon fas fa-chalkboard-teacher"></i>
              <p>
                Dosen
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo site_url('admin/blog') ?>" class="nav-link">
              <i class="nav-icon fas fa-bookmark"></i>
              <p>
                Artikel & Berita
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo site_url('admin/agenda') ?>" class="nav-link">
              <i class="nav-icon fas fa-calendar-check"></i>
              <p>
                Agenda
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo site_url('admin/banner') ?>" class="nav-link">
              <i class="nav-icon far fa-images"></i>
              <p>
                Banner
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo site_url('admin/faq') ?>" class="nav-link">
              <i class="nav-icon fas fa-bullhorn"></i>
              <p>
                FAQ
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo site_url('admin/stakeholder') ?>" class="nav-link">
              <i class="nav-icon fas fa-clinic-medical"></i>
              <p>
                Stakeholder
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo site_url('admin/banner') ?>" class="nav-link">
              <i class="nav-icon far fa-images"></i>
              <p>
                Banner
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
              <i class="nav-icon fas fa-power-off"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
