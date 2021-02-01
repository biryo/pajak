<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Data Pajak Hiburan</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            Pajak Hiburan
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                                 <div class="container">
                                <br />
                                <h3><a href="" class="btn btn-outline btn-info glyphicon-plus" data-toggle="modal" data-target="#myModal">Tambah Data</a>
                           
                            </h3>
                                <form method="post" id="import_form_hiburan" enctype="multipart/form-data">
                                  <p><label>Select Excel File</label>
                                  <input type="file" name="file" id="file" required accept=".xls, .xlsx" /></p>
                                  <input type="submit" name="import" value="Import" class="btn btn-info" />
                                </form>
                                <br />
                              </div>


                            <br><br>
                            <div class="table-responsive">
                            <table width="100%" class="table table-striped table-bordered dark" id="example" style="color: black;">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>NOPD</th>
                                        <th>Nama</th> 
                                        <th>Alamat</th>
                                        <th>Status</th>
                                        <th class="text-center">Edit|Delete|Print</th>
                                    </tr>
                                </thead>
                                <tbody >
                                           <?php
                                              $no = 1;
                                              foreach ($p_hiburan as $t) {
                                              ?>
                                              <tr>
                                                <td><?php echo $no++; ?></td>
                                                <td><?php echo $t->no_pdhb ?></td>
                                                <td><?php echo $t->nama ?></td>
                                                <td><?php echo $t->alamat_pdhb ?></td>
                                                <?php 
                                                    if ($t->stts == 'Himbauan') {
                                                        echo "<td class='danger'>".$t->stts."</td>";        
                                                    }
                                                    elseif ($t->stts == 'Peringatan') {
                                                        echo "<td class='danger'>".$t->stts."</td>";   
                                                    }
                                                    elseif ($t->stts == 'Pemasangan Stiker') {
                                                        echo "<td class='danger'>".$t->stts."</th>";   
                                                    }
                                                    elseif ($t->stts == 'Stiker Terpasang') {
                                                        echo "<td class='success'>".$t->stts."</td>";   
                                                    }
                                                ?>
                                                <td nowrap="nowrap" class="text-center">

                                                  <a class="btn btn-primary btn-xs" title="Edit" href="<?php echo base_url().'adm/c_adm/edit_phiburan/'.$t->id_phb; ?>"><span class="glyphicon glyphicon-edit" data-toggle="modal" data-target="#Edit"></span></a>
                                                  <a class="btn btn-warning btn-xs" title="Hapus" href="<?php echo base_url().'adm/c_adm/apus_phiburan/'.$t->id_phb; ?>"><span class="glyphicon glyphicon-remove"></span></a>
                                                  <a class="btn btn-success btn-xs" title="Print" href="#"><span class="glyphicon glyphicon-print"></span></a>
                                                  <a class="btn btn-success btn-xs" title="Print To PDF" href="#"><span class="glyphicon glyphicon-file"></span></a>
                                                </td>
                                              </tr>
                                            <?php } ?>
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                            </div>
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
                                            <h4 class="modal-title" id="myModalLabel">Tambah Pajak Hotel</h4>
                                        </div>
                                        <div class="modal-body">
                                            <form action="<?php echo base_url().'adm/c_adm/plus_phiburan' ?>" class="form-contact" method="post">     
                                                  <div class="form-group">
                                                        <label>NOPD</label>
                                                        <input type="text" name="nopd" class="form-control"  placeholder="" required oninvalid="this.setCustomValidity('Form Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                                                  </div>

                                                  <div class="form-group">
                                                    <label>Nama</label>
                                                    <input type="text" name="nama" class="form-control" placeholder="" required oninvalid="this.setCustomValidity('Form Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                                                  </div>

                                                  <div class="form-group">
                                                  <label>Alamat</label>
                                                  <input type="text" name="alamat" class="form-control"  placeholder="" required oninvalid="this.setCustomValidity('Form Tidak Boleh Kosong')" oninput="setCustomValidity('')">
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


<script type="text/javascript">
      $(document).ready(function() {
    $('#example').DataTable( {
        
    } );
} );
    </script>