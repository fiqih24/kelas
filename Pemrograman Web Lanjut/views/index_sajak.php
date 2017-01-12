<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sajakin-yuk.com</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.5 -->
  <link rel="stylesheet" href="<?=base_url('aset_sajak/css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?=base_url('aset_sajak/plugins/morris/morris.css')?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=base_url('aset_sajak/font-awesome/css/font-awesome.min.css')?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?=base_url('aset_sajak/ionicons/css/ionicons.min.css')?>">

  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url('aset_sajak/css/bootstrap-datepicker.css')?>">
    <link rel="stylesheet" href="<?=base_url('aset_sajak/css/dataTables.bootstrap.css')?>">
  <link rel="stylesheet" href="<?=base_url('aset_sajak/css/AdminLTE.min.css')?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?=base_url('aset_sajak/css/skins/_all-skins.min.css')?>">
  <style>
  .panel-heading > .tombol-kanan {margin-top: -5px; float: right;}

  .panel-heading > .tombol-kanan > .btn-xs {	margin-top: 4px;}
  </style>
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">

    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>S</b>JK</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Sajak </b>Developer</span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success"><?=$jumlah_pesan?></span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Kamu Mempunyai <?=$jumlah_pesan?> Pesan </li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">

                  <?php foreach ($list_pesan as $list) {?>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        <?=$list->pengirim?>
                        <small><i class="fa fa-clock-o"></i><?=$list->pengirim?></small>
                      </h4>
                      <p><?=$list->isi_pesan?></p>
                    </a>
                  </li>
                  <?php } ?>
                </ul>
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning"><?=$itung_notif?></span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Kamu punya <?=$itung_notif?> Pemberitahuan</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <?php foreach ($notif as $isi_notif){?>
                  <li>
                    <a href="#">
                      <i class="fa fa-warning text-yellow"></i> <?=$isi_notif->isi_pemberitahuan?>
                    </a>
                  </li>
                  <?php } ?>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->

          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?=base_url('foto_profil/'.$baris_user->foto)?>" class="user-image" alt="User Image">
              <span class="hidden-xs"><?=$baris_user->username?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?=base_url('foto_profil/'.$baris_user->foto)?>" class="img-circle" alt="User Image">

                <p>
                  <?=$baris_user->nama?> - Sajak Developer
                  <small>Headmaster Sajakers since Dec. 2016</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">1822 Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">-</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">130 Sajakdibu</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="<?=site_url('sajak/page/my_profile')?>" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?=site_url('sajak/logout')?>" class="btn btn-default btn-flat">Sign out</a>
                </div>
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
<input id="tanggal">
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?=base_url('foto_profil/'.$baris_user->foto)?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?=$baris_user->nama?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
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
      <ul class="sidebar-menu">
        <li class="header"> <i class="fa fa-keyboard-o"> SAJAK Dev. Corporation</i></li>
        <li>
          <a href="<?=site_url('sajak/page')?>">
            <i class="fa fa-dashboard"></i> <span>Beranda</span> <i class="fa fa-angle-left pull-right"></i>
          </a>

        </li>


        <?php if ($this->session->userdata('status')=="admin"){?>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Member Settings</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=site_url('sajak/page/sajak_member')?>"><i class="fa fa-circle-o"></i> Sajak Member </a></li>
            <li><a href="<?=site_url('sajak/page/member')?>"><i class="fa fa-circle-o"></i> Banned Member</a></li>

          </ul>
        </li>
        <?php } ?>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Sajak Menu</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=site_url('sajak/page/buat_sajak')?>"><i class="fa fa-circle-o"></i>Buat Sajak</a></li>
        
            <li><a href="<?=site_url('sajak/page/liat_sajak')?>"><i class="fa fa-circle-o"></i>Liat Sajak</a></li>

          </ul>
        </li>


        <li>
          <a href="<?=site_url('sajak/page/pesan')?>">
            <i class="fa fa-envelope"></i> <span>Pesan</span>
            <small class="label pull-right bg-yellow">12</small>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-user-circle"></i> <span>Akun Saya</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">

            <li><a href="<?=site_url('sajak/page/my_profile')?>"><i class="fa fa-id-badge"></i>My Profile</a></li>


            <li><a href="<?=site_url('sajak/page/ubah_password')?>"><i class="fa fa-lock"></i> Ubah Password</a></li>

          </ul>
        </li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->

  <div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?php if($this->uri->segment(3)==null || $this->uri->segment(3)=="beranda"){
          echo "Beranda";
        }if($this->uri->segment(3)=="sajak_member" || $this->uri->segment(3)=="member"){
          echo "Member Settings";
        }if($this->uri->segment(3)=="buat_sajak" || $this->uri->segment(3)=="vote_sajak" || $this->uri->segment(3)=="liat_sajak"){
          echo "Sajak Menu";
        }if($this->uri->segment(3)=="pesan"){
          echo "Pesan";
        }if($this->uri->segment(3)=="my_profile" || $this->uri->segment(3)=="ubah_password"){
          echo "Akun Saya ";
        }
      ?>
        <small>Sajak Dev Corp.</small>
      </h1>

    </section>

    <!-- Main content -->
    <?php if ($this->uri->segment(3)!="my_profile"){?>
    <section class="content">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-md-2 col-sm-6 col-xs-12">

          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="ion-android-checkmark-circle"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Total Voting </span>
              <span class="info-box-number"><?=$baris_total_voting->jml_voting?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="ion-ios-paper-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Total Sajak</span>
              <span class="info-box-number"><?=$baris_total_sajak->jml_sajak?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Total Members</span>
              <span class="info-box-number"><?=$baris_total_user->jml_user?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

  <?php } ?>
      <!-- /.row -->

  <?php if ($this->uri->segment(3)=="beranda" || $this->uri->segment(3)==null){
     $this->load->view('beranda');
   }if ($this->uri->segment(3)=="my_profile"){
     $this->load->view('profile');
   }if ($this->uri->segment(3)=="pesan"){
     $this->load->view('pesan');
   }if ($this->uri->segment(3)=="pemberitahuan"){
     $this->load->view('pemberitahuan');
   }if ($this->uri->segment(3)=="buat_sajak"){
     $this->load->view('buat_sajak');
   }if ($this->uri->segment(3)=="vote_sajak"){
     $this->load->view('vote_sajak');
   }if ($this->uri->segment(3)=="liat_sajak"){
     $this->load->view('liat_sajak');
   }if ($this->uri->segment(3)=="sajak_member"){
     $this->load->view('sajak_by_member');
   }if ($this->uri->segment(3)=="member"){
     $this->load->view('member');
   }
    ?>




      <!-- /.row -->
    </section>

    <!-- /.content -->
  </div>

  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> SJK.DEV.2.2.3.ST.1.K1
    </div>
    <strong>Copyright &copy; 2016-2017 <a href="#">SAJAK Developer</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript::;">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript::;">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript::;">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript::;">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript::;">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript::;">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript::;">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript::;">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
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

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript::;" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
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

<!-- jQuery 2.1.4 -->

<script src="<?=base_url('aset_sajak/js/jquery-1.8.2.js')?>"></script>
<script src="<?=base_url('aset_sajak/jquery-3.1.1.min.js')?>"></script>
<!-- Bootstrap 3.3.5 -->
<script src="<?=base_url('aset_sajak/js/bootstrap.min.js')?>"></script>
<!-- FastClick -->
<script src="<?=base_url('aset_sajak/plugins/fastclick/fastclick.js')?>"></script>
<!-- AdminLTE App -->
<script src="<?=base_url('aset_sajak/js/app.min.js')?>"></script>

<!-- SlimScroll 1.3.0 -->
<script src="<?=base_url('aset_sajak/plugins/slimScroll/jquery.slimscroll.min.js')?>"></script>
<!-- ChartJS 1.0.1 -->
<script src="<?=base_url('aset_sajak/plugins/chartjs/Chart.min.js')?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?=base_url('aset_sajak/js/pages/dashboard2.js')?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?=base_url('aset_sajak/js/demo.js')?>"></script>

<!--sajak js -->

<script src="<?=base_url('aset_sajak/js/bootstrap-datepicker.js')?>"></script>
<script src="<?=base_url('aset_sajak/js/jquery.dataTables.min.js')?>"></script>
<script src="<?=base_url('aset_sajak/js/dataTables.bootstrap.min.js')?>"></script>
<script src="<?=base_url('aset_sajak/js/ajax_sajak.js')?>"></script>
<script> var base_url = "<?=base_url()?>"</script>
<script> var site_url = "<?=site_url()?>"</script>
<script>
$(document).ready(function(){
    $('#fiq_dt').DataTable();
});
</script>
<script type="text/javascript">
       $(document).ready(function(){
          $("#tanggal").datepicker();
       });
    </script>
</body>
</html>
