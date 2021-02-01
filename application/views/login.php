<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

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
    <link href="<?php echo base_url().'assetss/vendor/datatables-plugins/dataTables.bootstrap.css'?>" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="<?php echo base_url().'assetss/vendor/datatables-responsive/dataTables.responsive.css'?>" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form method="post" action="<?php echo base_url().'Welcome/login'?>">
                            <fieldset>
                                <div class="form-group">
                                    <input type="text" name="admin_username" placeholder="username" class="form-control" required oninvalid="this.setCustomValidity('Silahkan isi Form Dengan Benar')" oninput="setCustomValidity('')" autofocus>
                                        
                                </div>
                                <div class="form-group">
                                    <input type="password" name="admin_password" placeholder="password" class="form-control" required oninvalid="this.setCustomValidity('Silahkan isi Form Dengan Benar')" oninput="setCustomValidity('')">
                                        
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <button class="btn btn-lg btn-success btn-block" type="submit">Login</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- jQuery -->
    <script src="<?php echo base_url().'assetss/vendor/jquery/jquery.min.js'?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url().'assetss/vendor/bootstrap/js/bootstrap.min.js'?>"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url().'assetss/vendor/metisMenu/metisMenu.min.js'?>"></script>

    <!-- Morris Charts JavaScript -->
    <script src="<?php echo base_url().'assetss/vendor/raphael/raphael.min.js'?>"></script>
    <script src="<?php echo base_url().'assetss/vendor/morrisjs/morris.min.js'?>"></script>
    <script src="<?php echo base_url().'assetss/data/morris-data.js'?>"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url().'assetss/dist/js/sb-admin-2.js'?>"></script>

        <!-- /#wrapper -->

    <!-- DataTables JavaScript -->
    <script src="<?php echo base_url().'assetss/vendor/datatables/js/jquery.dataTables.min.js'?>"></script>
    <script src="<?php echo base_url().'assetss/vendor/datatables-plugins/dataTables.bootstrap.min.js'?>"></script>
    <script src="<?php echo base_url().'assetss/vendor/datatables-responsive/dataTables.responsive.js'?>"></script>


    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>

<!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url().'assets/vendor/jquery/jquery.min.js'?>"></script>
  <script src="<?php echo base_url().'assets/vendor/bootstrap/js/bootstrap.bundle.min.js'?>"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url().'assets/vendor/jquery-easing/jquery.easing.min.js'?>"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url().'assets/js/sb-admin-2.min.js'?>"></script>

  <!-- Page level plugins -->
  <script src="<?php echo base_url().'assets/vendor/datatables/jquery.dataTables.min.js'?>"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="<?php echo base_url().'assets/js/demo/datatables-demo.js'?>"></script>
  
  <script src="<?php echo base_url().'assets/vendor/datatables/dataTables.bootstrap4.min.js'?>"></script>

  <!-- Page level custom scripts -->
  <script src="<?php echo base_url().'assets/js/demo/datatables-demo.js'?>"></script>

    <!--Alert-->>
      <script type="text/javascript">
        $('.alert-message').alert().delay(3000).slideUp('slow');
      </script>

</body>

</html>
