<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>MbakSir | Akun Pegawai</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../assets/dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="../assets/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="../assets/bower_components/jvectormap/jquery-jvectormap.css">
   <!-- DataTables -->
  <link rel="stylesheet" href="../assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css"> 
  <!-- Date Picker -->
  <link rel="stylesheet" href="../assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../assets/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="../assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="/dashboard" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>M</b>S</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Mbak</b>SIR</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../assets/image/user.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{session.get('user')['username']}}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Pemilik</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
         <li class="treeview">
          <a href="/dashboard/pemilik">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span> 
             <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="/transaksi"><i class="fa fa-circle-o"></i> Laporan Penjualan</a></li>
            <li><a href="/menu"><i class="fa fa-circle-o"></i> Kelola Menu</a></li>
             <li><a href="/akun"><i class="fa fa-circle-o"></i> Akun pegawai</a></li>
            <li><a href="#" data-toggle="modal" data-target="#modal-edit{{session.get('user')['id_akun']}}"><i class="fa fa-circle-o"></i> Edit Akun</a></li>
           
          </ul>
        </li>
         <li class="">
          <a href="/logout">
            <i class="fa fa-cross"></i> <span>Logout</span>
          </a>
        </li>
        
    </section>
    <!-- /.sidebar -->
  </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Daftar Pegawai
      </h1>
      <ol class="breadcrumb">
        <li><a href="/dashboard/pemilik"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="">Dashboard</li><li class="active">Akun Pegawai</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-12">
          <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#aktif">Aktif</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#tidak_aktif">Tidak Aktif</a>
    </li>
  </ul>
    <div class="tab-content">
    <div id="aktif" class="tab-pane active"> 
      <h2>Pegawai Aktif</h2>
      <table id="table" cellspacing="0" class="table table-striped table-bordered bg-success table-hover text-center">
              {% for a in akun %}
              {% if loop.first %}
                 <thead>
                    <tr>
                        <th>ID_PEGAWAI</th>
                        <th>NAMA</th>
                        <th>USERNAME</th>
                        <th>EMAIL</th>
                        <th>NOMOR TELEPON</th>
                        <th>ALAMAT</th>
                        <th>JOBDESC</th>
                        <th>TAHUN MULAI BEKERJA</th>
                        <th>Action</th>
                    </tr>
                </thead>
                {% endif %}
                {% if a.status == 1 %}
                <tbody>
        
                    <tr>
                   <td>
                      {{ a.id_akun }}
                    </td>
                    <td> 
                      {{ a.nama }}
                    </td>
                    <td >
                      {{ a.username }}
                    </td>
                    <td>
                      {{ a.email }}
                    </td>
                    <td>
                      {{ a.no_telp }}
                    </td>
                     <td>
                      {{ a.alamat }}
                    </td>
                    <td>
                      {{ a.jobdesc }}
                    </td>
                    <td>
                      {{ a.tahun_bekerja }}
                    </td>
                    
                    <td>
                       <a href ="/akun/status/{{a.id_akun}}/{{a.status}}" class="btn btn-danger btn-sm"  role="button"><i class = "glyphicon glyphicon-remove"></i>  Non-Aktifkan</a>
                    </td>
                     {% else %}
                    {% endif %}
                    </tr>
                </tbody>
                {% if loop.last %}
            </table>
            {% endif %}
            {% else %}
                No Data
            {% endfor %}

    </div>
     <div id="tidak_aktif" class="tab-pane fade"> 
      <h2>Pegawai Tidak Aktif</h2>
      <table id="table" cellspacing="0" class="table table-striped table-bordered bg-success table-hover text-center">
              {% for a in akun %}
              {% if loop.first %}
                 <thead>
                    <tr>
                        <th>ID_PEGAWAI</th>
                        <th>NAMA</th>
                        <th>USERNAME</th>
                        <th>EMAIL</th>
                        <th>NOMOR TELEPON</th>
                        <th>JOBDESC</th>
                        <th>TAHUN MULAI BEKERJA</th>
                        <th>Action</th>
                    </tr>
                </thead>
                {% endif %}
                {% if a.status == 0 %}
                <tbody>
        
                    <tr>
                   <td>
                      {{ a.id_akun }}
                    </td>
                    <td> 
                      {{ a.nama }}
                    </td>
                    <td >
                      {{ a.username }}
                    </td>
                    <td>
                      {{ a.email }}
                    </td>
                    <td>
                      {{ a.no_telp }}
                    </td>
                    <td>
                      {{ a.jobdesc }}
                    </td>
                    <td>
                      {{ a.tahun_bekerja }}
                    </td>
                    
                    <td>
                       <a href ="/akun/status/{{a.id_akun}}/{{a.status}}" class="btn btn-success btn-sm"  role="button"><i class = "glyphicon glyphicon-ok"></i>  Aktifkan</a>
                     
                    </td>
                    {% else %}
                    {% endif %}
                    </tr>
                </tbody>
                {% if loop.last %}
            </table>
            {% endif %}
            {% else %}
                No Data
            {% endfor %}
    </div>
  </div>        <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
        </div>
        <!-- /.col -->
       </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.12
    </div>
    <strong><center>Copyright &copy; 2020 <a href="/dashboard">MbakSir</a>.All rights
    reserved.</center></strong> 
  </footer>
  </div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="../assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../assets/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="../assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="../assets/bower_components/raphael/raphael.min.js"></script>
<script src="../assets/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="../assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="../assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="../assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="../assets/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../assets/bower_components/moment/min/moment.min.js"></script>
<script src="../assets/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="../assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="../assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="../assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../assets/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../assets/dist/js/demo.js"></script>
<script src="../assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<!-- DataTables -->
<script src="../assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<script>
$.noConflict();
jQuery( document ).ready(function( $ ) {
    $('.table').DataTable();
  // $(document).ready(function () {
    $('.sidebar-menu').tree();
    // $('#example2').DataTables();
  })
</script>
</body>
</html>
