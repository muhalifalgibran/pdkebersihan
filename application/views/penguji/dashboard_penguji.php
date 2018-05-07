
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Input Uji Petik</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <?php echo form_open_multipart('penguji-dashboard')?>
                <div class="panel-body">

                    <div class="form-group">
                        <label for="exampleFormControlSelect1" >Nama Perusahaan</label>
                        <select class="form-control"  name="perusahaan" required>
                            <?php  foreach($data as $key) { ?>
                                <option value="<?php echo $key->idPelanggan?>"><?php echo $key->namaPerusahaan?></option>
                            <?php  } ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Keterangan</label>
                        <textarea type="text" name="keterangan" class="form-control-file form-control" id="exampleFormControlFile1" required></textarea>
                    </div>

                    <div class="form-group">
                        <label>Lama Hari</label>
                        <input type="number" name="lama" class="form-control-file form-control" id="exampleFormControlFile1" required>
                    </div>

                    <div class="form-group">
                        <label>Foto Uji Petik</label>
                        <input type="file" name="foto[]" class="form-control-file form-control" id="exampleFormControlFile1" multiple required>
                    </div>

                    <div class="form-group">
                        <button type="submit" name="sub" class="btn btn-info form-control">Kirim</button>
                    </div>



                </div>
                <?php echo form_close()?>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
    </div>
</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="<?=base_url()?>assets/admin/vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?=base_url()?>assets/admin/vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="<?=base_url()?>assets/admin/vendor/metisMenu/metisMenu.min.js"></script>

<!-- DataTables JavaScript -->
<script src="<?=base_url()?>assets/admin/vendor/datatables/js/jquery.dataTables.min.js"></script>
<script src="<?=base_url()?>assets/admin/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
<script src="<?=base_url()?>assets/admin/vendor/datatables-responsive/dataTables.responsive.js"></script>

<!-- Custom Theme JavaScript -->
<script src="<?=base_url()?>assets/admin/dist/js/sb-admin-2.js"></script>

<!-- Page-Level Demo Scripts - Tables - Use for reference -->
<script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
</script>

</body>

</html>
