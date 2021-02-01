<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Pajak PBB</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            Edit Data
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">                            
                                                <?php foreach ($pbb as $t){ }?>
                                                <form action="<?php echo base_url().'adm/c_adm/edit_pbb_aksi/'.$t->id_pbb; ?>" class="form-contact" method="post">
                                                        <input type="hidden" name="id_pbb" value="<?php echo $t->id_pbb; ?>" required>
                                                  <div class="row">

                                                    <div class="col-lg-5">
                                                      <div class="form-group">
                                                          <label>NOP Gabung</label>
                                                          <input type="text" name="nopg" class="form-control"  placeholder="" value="<?php echo $t->nop_gabung; ?>" required oninvalid="this.setCustomValidity('Form Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                                                      </div>

                                                      <div class="form-group">
                                                          <label>Nama WP SPPT</label>
                                                          <input type="text" name="nama" class="form-control"  placeholder="" value="<?php echo $t->nm_wp_sppt; ?>" required oninvalid="this.setCustomValidity('Form Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                                                      </div>

                                                      <div class="form-group">
                                                          <label>Alamat WP</label>
                                                          <input type="text" name="alamat_wp" class="form-control"  placeholder="" value="<?php echo $t->alamat_wp; ?>" required oninvalid="this.setCustomValidity('Form Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                                                      </div>

                                                      <div class="form-group">
                                                          <label>Alamat OP</label>
                                                          <input type="text" name="alamat" class="form-control"  placeholder="" value="<?php echo $t->alamat_op; ?>" required oninvalid="this.setCustomValidity('Form Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                                                      </div>

                                                      <div class="form-group">
                                                          <label>Tarif</label>
                                                          <input type="text" name="tarif" class="form-control"  placeholder="" value="<?php echo $t->tarif; ?>" required oninvalid="this.setCustomValidity('Form Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                                                      </div>


                                                      <div class="form-group">
                                                          <label>Status</label>
                                                          <select type="text" name="stts" class="form-control" required oninvalid="this.setCustomValidity('Silahkan Pilih Salah Satu Dari List')" oninput="setCustomValidity('')">
                                                            <option value="">Pilih Status</option>
                                                            <option value="Himbauan" <?php if ($t->stts == 'Himbauan') {echo "Selected";} ?>>Himbauan</option>
                                                            <option value="Peringatan" <?php if ($t->stts == 'Peringatan') {echo "Selected";} ?>>Peringatan</option>
                                                            <option value="Pemasangan Stiker" <?php if ($t->stts == 'Pemasangan Stiker') {echo "Selected";} ?>>Pemasangan Stiker</option>
                                                            <option value="Stiker Terpasang" <?php if ($t->stts == 'Stiker Terpasang') {echo "Selected";} ?>>Stiker Terpasang</option>
                                                          </select>
                                                      </div>
                                                    
                                                    </div>
                                                  </div>                
                                                    <button type="submit" class="btn btn-default">Submit Button</button>
                                                    <button type="reset" class="btn btn-default">Reset Button</button>
                                                </form>
 
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
                        
</div>
<!-- /#page-wrapper -->