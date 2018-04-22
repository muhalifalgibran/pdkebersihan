
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
                <?php echo form_open('super-regis')?>
                <div class="panel-body">



                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Jabatan</label>
                        <select class="form-control"  name="jabatan" required>
                                <option value="marketing">Marketing</option>
                                <option value="penguji">Penguji</option>
                                <option value="kasie pelsus">Kasie Pelsus</option>
                                <option value="bidang keuangan">Bidang Keuangan</option>
                                <option value="kabid pelsus">Kabid Pelsus</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Nama Pegawai</label>
                        <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Pegawai" required>
                    </div>
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username" required>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Password" required>
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
