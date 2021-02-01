<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pajak</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url().'assetss/vendor/bootstrap/css/bootstrap.min.css'?>" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url().'assetss/vendor/metisMenu/metisMenu.min.css'?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url().'assetss/dist/css/sb-admin-2.css'?>" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo base_url().'assetss/vendor/morrisjs/morris.css'?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url().'assetss/vendor/font-awesome/css/font-awesome.min.css'?>" rel="stylesheet" type="text/css">
    
    <!-- DataTables CSS -->
    <!-- <link href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" rel="stylesheet">     -->

    <!-- /#wrapper -->
    <!-- <script src="<?php echo base_url().'assetss/vendor/jquery/jquery.min.js'?>"></script> -->

    <!-- Admin LTE -->
    <!-- Font Awesome -->
      <!-- <link rel="stylesheet" href="<?php echo base_url().'assetss/dt_server_side/plugins/fontawesome-free/css/all.min.css' ?>"> -->
      <!-- Ionicons -->
      <!-- DataTables -->
      <!-- <link rel="stylesheet" href="<?php echo base_url().'assetss/dt_server_side/plugins/datatables-bs4/css/dataTables.bootstrap4.css'?>"> -->
      <!-- Theme style -->
      <!-- <link rel="stylesheet" href="<?php echo base_url().'assetss/dt_server_side/dist/css/adminlte.min.css'?>"> -->
      <!-- Google Font: Source Sans Pro -->

      <!-- <script src="<?php echo base_url().'assetss/dt_server_side/plugins/jquery/jquery.min.js'?>"></script> -->

        
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url().'assetss/dt_server_side/bower_components/bootstrap/dist/css/bootstrap.min.css'?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url().'assetss/dt_server_side/bower_components/font-awesome/css/font-awesome.min.css'?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url().'assetss/dt_server_side/bower_components/Ionicons/css/ionicons.min.css'?>">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url().'assetss/dt_server_side/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css'?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url().'assetss/dt_server_side/dist/css/AdminLTE.min.css'?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url().'assetss/dt_server_side/dist/css/skins/_all-skins.min.css'?>">
        <!-- /#wrapper -->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

      <!-- jQuery 3 -->
<script src="<?php echo base_url().'assetss/dt_server_side/bower_components/jquery/dist/jquery.min.js'?>"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url().'assetss/dt_server_side/bower_components/bootstrap/dist/js/bootstrap.min.js'?>"></script>
<!-- DataTables -->
<script src="<?php echo base_url().'assetss/dt_server_side/bower_components/datatables.net/js/jquery.dataTables.min.js'?>"></script>
<script src="<?php echo base_url().'assetss/dt_server_side/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js'?>"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url().'assetss/dt_server_side/bower_components/jquery-slimscroll/jquery.slimscroll.min.js'?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url().'assetss/dt_server_side/bower_components/fastclick/lib/fastclick.js'?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url().'assetss/dt_server_side/dist/js/adminlte.min.js'?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url().'assetss/dt_server_side/dist/js/demo.js'?>"></script>

              
<!-- page script -->
</head>

<body>

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
                <a class="navbar-brand" href="index.html">Aplikasi Pajak</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#" data-toggle="modal" data-target="#password"><i class="fa fa-lock fa-fw"></i> Ganti Password</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="<?php echo base_url().'adm/c_adm/logout'?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="<?php echo base_url().'adm/c_adm'?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>

                        <li>
                            <a href="#"><i class="fa  fa-database fa-fw"></i>Pajak<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url().'adm/c_adm/p_hotel'?>">Pajak Hotel</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url().'adm/c_adm/p_resto'?>">Pajak Restoran</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url().'adm/c_adm/p_parkir'?>">Pajak Parkir</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url().'adm/c_adm/p_hiburan'?>">Pajak Hiburan</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url().'adm/c_adm/p_pbb'?>">Pajak PBB</a>
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

        <!-- Modal -->
                            <div class="modal fade" id="password" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Ganti Password</h4>
                                        </div>
                                        <div class="modal-body">
                                                    <form role="form" action="<?php echo base_url().'adm/c_adm/ganti_password_act' ?>" method="post">
                                                    <div class="form-group">
                                                        <label>Password Baru</label>
                                                        <input type="password" name="pass_baru" class="form-control"  placeholder=""  required oninvalid="this.setCustomValidity('Form Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                                                    </div>
                                            </div>
                                        <div class="modal-footer">
                                                    <button type="submit" class="btn btn-default">Submit Button</button>
                                                    <button type="reset" class="btn btn-default">Reset Button</button>
                                                     </form>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->