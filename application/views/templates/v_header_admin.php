<!DOCTYPE html>
<html lang="en">
<?php echo validation_errors(); ?>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SB Admin - Start Bootstrap Template</title>
  <!-- Bootstrap core CSS-->
  <!-- <link href="../web1/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"> -->

  <!-- Custom fonts for this template-->
  <!-- <link href="./assets/css/font-awesome.min.css" rel="stylesheet" type="text/css"> -->
  <!-- Page level plugin CSS-->
  <!-- <link href="./assets/css/dataTables.bootstrap4.css" rel="stylesheet" type="text/css"> -->
  <!-- Custom styles for this template-->
  <!-- <link href="./assets/css/sb-admin.css" rel="stylesheet" type="text/css"> -->

   <link href="<?php echo base_url('/assets/css/bootstrap.min.css');?>" rel="stylesheet">
   <link href="<?php echo base_url('/assets/css/font-awesome.min.css');?>" rel="stylesheet">
   <link href="<?php echo base_url('/assets/css/dataTables.bootstrap4.css');?>" rel="stylesheet">
   <link href="<?php echo base_url('/assets/css/sb-admin.css');?>" rel="stylesheet">
   
   <script src="<?php echo base_url('/assets/js/jquery.min.js');?>"></script>
   <script src="<?php echo base_url('/assets/js/gijgo.min.js');?>"></script>
   <link href="<?php echo base_url('/assets/css/gijgo.min.css');?>" rel="stylesheet">

</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="<?php echo site_url('admin/v_home');?>">PLN Ambon</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="<?php echo site_url('admin/v_home');?>">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
<!--         <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-wrench"></i>
            <span class="nav-link-text">Inspeksi</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li>
              <a href="<?php echo site_url('supervisor/v_inspeksi');?>">Laporan Inspeksi</a>
            </li>

            <li>
              <a href="<?php echo site_url('supervisor/v_notif_inspeksi_supervisor');?>">Atur Inspeksi</a>
            </li>
          </ul>
        </li> -->

<!--         <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapsePemeliharaan" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-wrench"></i>
            <span class="nav-link-text">Pemeliharaan</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapsePemeliharaan">
            <li>
              <a href="<?php echo site_url('supervisor/v_pemeliharaan');?>">Laporan Pemeliharaan</a>
            </li>
            <li>
              <a href="<?php echo site_url('supervisor/v_notif_pemeliharaan_supervisor');?>">Atur Pemeliharaan</a>
            </li>
          </ul>
        </li> -->

      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
  
<!--         <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-bell"></i>
            <span class="d-lg-none">Alerts
              <span class="badge badge-pill badge-warning">6 New</span>
            </span>
            <span class="indicator text-warning d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="alertsDropdown">
            <h6 class="dropdown-header">New Alerts:</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-danger">
                <strong>
                  <i class="fa fa-long-arrow-down fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item small" href="#">View all alerts</a>
          </div>
        </li> -->
<!--         <li class="nav-item">
          <form class="form-inline my-2 my-lg-0 mr-lg-2">
            <div class="input-group">
              <input class="form-control" type="text" placeholder="Search for...">
              <span class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
          </form>
        </li> -->
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('proses_logout_admin');?>">
            <i class="fa fa-fw fa-sign-out"></i>Logout
          </a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">My Dashboard</li>
      </ol>