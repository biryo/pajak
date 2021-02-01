<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Data Pajak PBB</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                           Data Pajak PBB
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                              <div class="container">
                                <br />
                                <h3><a href="" class="btn btn-outline btn-info glyphicon-plus" data-toggle="modal" data-target="#myModal">Tambah Data</a></h3>
                                <form method="post" id="import_form" enctype="multipart/form-data">
                                  <p><label>Select Excel File</label><br>
                                    NOP Gabung || Nama WP SPPT || Alamat WP || Alamat OP || Tarif || Status
                                  <input type="file" name="file" id="file" required accept=".xls, .xlsx" /></p>
                                  <input type="submit" name="import" value="Import" class="btn btn-info" />
                                </form>
                                <br />
                              </div>
                            
                            
                            <br>
                            <table id="table1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>NOP Gabung</th>
                                        <th>Nama WP SPPT</th>
                                        <th>Alamat WP</th>
                                        <th>Alamat</th>
                                        <th>Tarif</th>
                                        <th>Status</th>
                                        <th class="text-center">Edit|Delete|Print</th>
                                    </tr>
                                </thead>
                                <!--<tbody>
                                           <?php
                                              $no = 1;
                                              foreach ($pbb as $t) {
                                              ?>
                                              <tr>
                                                <td><?php echo $no++; ?></td>
                                                <th><?php echo $t->nop_gabung ?></th>
                                                <th><?php echo $t->nm_wp_sppt ?></th>
                                                <th><?php echo $t->alamat_wp ?></th>
                                                <th><?php echo $t->alamat_op ?></th>
                                                <th><?php echo $t->tarif ?></th>
                                                
                                                <?php 
                                                    if ($t->stts == 'Himbauan') {
                                                        echo "<th class='danger'>".$t->stts."</th>";        
                                                    }
                                                    elseif ($t->stts == 'Peringatan') {
                                                        echo "<th class='danger'>".$t->stts."</th>";   
                                                    }
                                                    elseif ($t->stts == 'Pemasangan Stiker') {
                                                        echo "<th class='danger'>".$t->stts."</th>";   
                                                    }
                                                    elseif ($t->stts == 'Stiker Terpasang') {
                                                        echo "<th class='success'>".$t->stts."</th>";   
                                                    }
                                                ?>
                                                 
                                                
                                                <td nowrap="nowrap" class="">
                                                    <center>
                                                  <a class="btn btn-primary btn-xs" title="Edit" href="<?php echo base_url().'adm/c_adm/edit_pbb/'.$t->id_pbb; ?>"><span class="glyphicon glyphicon-edit"></span></a>   
                                                  <a class="btn btn-warning btn-xs" title="Hapus" href="<?php echo base_url().'adm/c_adm/apus_pbb/'.$t->id_pbb; ?>"><span class="glyphicon glyphicon-remove"></span></a>   
                                                  <a class="btn btn-success btn-xs" title="Print" href="<?php echo base_url().'adm/c_adm/cetak_pbb/'.$t->id_pbb; ?>"><span class="glyphicon glyphicon-print"></span></a>
                                                  <a class="btn btn-success btn-xs" title="Print To PDF" href="<?php echo base_url().'adm/c_adm/cetak_pdf_pbb/'.$t->id_pbb; ?>"><span class="glyphicon glyphicon-file"></span></a>
                                                    </center>
                                                </td>
                                              </tr>
                                            <?php } ?>
                                </tbody>-->
                            </table>
                            <!-- /.table-responsive -->
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
             
                            <!-- Modal -->
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Tambah Transaksi</h4>
                                        </div>
                                        <div class="modal-body">
                                            <form action="<?php echo base_url().'adm/c_adm/plus_pbb' ?>" class="form-contact" method="post">         

                                                          <div class="form-group">
                                                                <label>NOP Gabung</label>
                                                                <input type="text" name="nopg" class="form-control"  placeholder="" required oninvalid="this.setCustomValidity('Form Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                                                          </div>

                                                          <div class="form-group">
                                                            <label>Nama WP SPPT</label>
                                                            <input type="text" name="nama" class="form-control" placeholder="" required oninvalid="this.setCustomValidity('Form Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                                                          </div>

                                                          <div class="form-group">
                                                          <label>Alamat WP</label>
                                                          <input type="text" name="alamat_wp" class="form-control"  placeholder="" required oninvalid="this.setCustomValidity('Form Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                                                          </div>

                                                          <div class="form-group">
                                                          <label>Alamat OP</label>
                                                          <input type="text" name="alamat" class="form-control"  placeholder="" required oninvalid="this.setCustomValidity('Form Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                                                          </div>

                                                      <div class="form-group">
                                                          <label>Tarif</label>
                                                          <input type="text" name="tarif" class="form-control"  placeholder="" required oninvalid="this.setCustomValidity('Form Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                                                      </div>


                                                      <div class="form-group">
                                                          <label>Status</label>
                                                          <select type="text" name="stts" class="form-control" required oninvalid="this.setCustomValidity('Silahkan Pilih Salah Satu Dari List')" oninput="setCustomValidity('')">
                                                            <option value="">Pilih Status</option>
                                                            <option value="Himbauan">Himbauan</option>
                                                            <option value="Peringatan">Peringatan</option>
                                                            <option value="Pemasangan Stiker">Pemasangan Stiker</option>
                                                            <option value="Stiker Terpasang">Stiker Terpasang</option>
                                                          </select>
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
                        
        </div>
        <!-- /#page-wrapper -->

<script>
      $(document).ready(function() {
      $('#table1').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": {
              "url" :"<?php echo base_url().'adm/c_adm/get_ajax' ?>",
              "type" : "POST"
        }
    })
})
    </script>