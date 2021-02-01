</div>

  
      <!-- jQuery -->
    
    <!-- Bootstrap 4 -->
    <script src="<?php echo base_url().'assetss/dt_server_side/plugins/bootstrap/js/bootstrap.bundle.min.js'?>"></script>
    <!-- DataTables -->
    <script src="<?php echo base_url().'assetss/dt_server_side/plugins/datatables/jquery.dataTables.js'?>"></script>
    <script src="<?php echo base_url().'assetss/dt_server_side/plugins/datatables-bs4/js/dataTables.bootstrap4.js'?>"></script>
    <!-- AdminLTE App -->
    <!-- <script src="<?php echo base_url().'assetss/dt_server_side/dist/js/adminlte.min.js'?>"></script> -->
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url().'assetss/dt_server_side/dist/js/demo.js'?>"></script>

    <!-- /#wrapper -->

    <!-- jQuery -->
    <!-- <script src="<?php echo base_url().'assetss/vendor/jquery/jquery.min.js'?>"></script> -->

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
        <!-- <script src="https://code.jquery.com/jquery-3.3.1.js"></script> -->
        <!-- <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script> -->
        <!-- <script src="https://cdn.datatables.net/scroller/2.0.1/js/dataTables.scroller.min.js"></script> -->

 
  <!-- <script src="https://code.jquery.com/jquery-3.3.1.js"></script> -->
    <!-- <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script> -->
<!-- Bootstrap core JavaScript
  
  <script src="<?php echo base_url().'assets/vendor/bootstrap/js/bootstrap.bundle.min.js'?>"></script>

   Core plugin JavaScript
  <script src="<?php echo base_url().'assets/vendor/jquery-easing/jquery.easing.min.js'?>"></script>

   Custom scripts for all pages
  <script src="<?php echo base_url().'assets/js/sb-admin-2.min.js'?>"></script>

  Page level plugins
  <script src="<?php echo base_url().'assets/vendor/datatables/jquery.dataTables.min.js'?>"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  Page level custom scripts
  <script src="<?php echo base_url().'assets/js/demo/datatables-demo.js'?>"></script>
  
  <script src="<?php echo base_url().'assets/vendor/datatables/dataTables.bootstrap4.min.js'?>"></script>

  Page level custom scripts
  <script src="<?php echo base_url().'assets/js/demo/datatables-demo.js'?>"></script>
 -->


    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>

    

<script>

    $(document).ready(function(){

      load_data();

      function load_data()
      {
        
      }

      $('#import_form').on('submit', function(event){
        event.preventDefault();
        $.ajax({
          url:"<?php echo base_url(); ?>excel_import/import",
          method:"POST",
          data:new FormData(this),
          contentType:false,
          cache:false,
          processData:false,
          success:function(data){
            $('#file').val('');
            load_data();
            alert(data);
          }
        })
      });

  });

</script>




<script>
    $(document).ready(function(){

  load_data();

  function load_data()
  {
    $.ajax({
      url:"<?php echo base_url(); ?>excel_import/fetch",
      method:"POST",
      success:function(data){
        $('#customer_data').html(data);
      }
    })
  }

  $('#import_form_resto').on('submit', function(event){
    event.preventDefault();
    $.ajax({
      url:"<?php echo base_url(); ?>excel_import/import_resto",
      method:"POST",
      data:new FormData(this),
      contentType:false,
      cache:false,
      processData:false,
      success:function(data){
        $('#file').val('');
        load_data();
        alert(data);
      }
    })
  });


});
</script>

<script>
    $(document).ready(function(){

  load_data();

  function load_data()
  {
    $.ajax({
      url:"<?php echo base_url(); ?>excel_import/fetch",
      method:"POST",
      success:function(data){
        $('#customer_data').html(data);
      }
    })
  }

  $('#import_form_hotel').on('submit', function(event){
    event.preventDefault();
    $.ajax({
      url:"<?php echo base_url(); ?>excel_import/import_hotel",
      method:"POST",
      data:new FormData(this),
      contentType:false,
      cache:false,
      processData:false,
      success:function(data){
        $('#file').val('');
        load_data();
        alert(data);
      }
    })
  });


});
</script>

<script>
    $(document).ready(function(){

  load_data();

  function load_data()
  {
    $.ajax({
      url:"<?php echo base_url(); ?>excel_import/fetch",
      method:"POST",
      success:function(data){
        $('#customer_data').html(data);
      }
    })
  }

  $('#import_form_parkir').on('submit', function(event){
    event.preventDefault();
    $.ajax({
      url:"<?php echo base_url(); ?>excel_import/import_parkir",
      method:"POST",
      data:new FormData(this),
      contentType:false,
      cache:false,
      processData:false,
      success:function(data){
        $('#file').val('');
        load_data();
        alert(data);
      }
    })
  });


});
</script>

<script>
    $(document).ready(function(){

  load_data();

  function load_data()
  {
    $.ajax({
      url:"<?php echo base_url(); ?>excel_import/fetch",
      method:"POST",
      success:function(data){
        $('#customer_data').html(data);
      }
    })
  }

  $('#import_form_hiburan').on('submit', function(event){
    event.preventDefault();
    $.ajax({
      url:"<?php echo base_url(); ?>excel_import/import_hiburan",
      method:"POST",
      data:new FormData(this),
      contentType:false,
      cache:false,
      processData:false,
      success:function(data){
        $('#file').val('');
        load_data();
        alert(data);
      }
    })
  });


});

</script>

  
    <!--Alert-->>
      <script type="text/javascript">
        $('.alert-message').alert().delay(3000).slideUp('slow');
      </script>
</body>

</html>
