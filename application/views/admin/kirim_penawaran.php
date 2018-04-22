
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Kirim Penawaran</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <?php echo form_open_multipart('penguji-penawaran')?>
                <div class="panel-body">



                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Nama Perusahaan</label>
                        <select class="form-control"  name="pelanggan">
                            <?php  foreach($namaPerusahaan as $key) { ?>
                            <option value="<?php echo $key->idPelanggan?>"><?php echo $key->namaPerusahaan?></option>
                            <?php  } ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Keterangan</label>
                        <textarea type="text" name="keterangan" class="form-control-file form-control" id="exampleFormControlFile1"></textarea>
                    </div>

                    <div class="form-group">
                        <label>Proposal Penawaran</label>
                        <input type="file" name="proposal" class="form-control-file form-control" id="exampleFormControlFile1">
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
