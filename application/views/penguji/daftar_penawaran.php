


<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Daftar Calon/pelanggan</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">

                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" >
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nama Perusahaan</th>
                            <th>Status Penawaran</th>
                            <th>Nama Pendaftar</th>
                            <th>Dana</th>

                        </tr>
                        </thead>
                        <tbody>
                        <?php  foreach ($daftar as $daf){ ?>
                            <tr class="odd gradeX">

                                <td><?php echo $daf->idProposal?></td>
                                <td><?php echo $daf->namaPerusahaan ?></td>
                                <td><?php echo $daf->statusPenawaran ?></td>
                                <td><?php
                                    $format = 'd-M-Y';
                                    // echo $daf->tglOperasi;
                                    $date = nice_date($daf->tglOperasi,$format);
                                    echo $date ?></td>
                                <td><?php echo $daf->dana ?></td>
                            </tr>
                        <?php  }?>
                        </tbody>
                    </table>
                    <!-- /.table-responsive -->
                    <!--                        <div class="well">-->
                    <!--                            <h4>DataTables Usage Information</h4>-->
                    <!--                            <p>DataTables is a very flexible, advanced tables plugin for jQuery. In SB Admin, we are using a specialized version of DataTables built for Bootstrap 3. We have also customized the table headings to use Font Awesome icons in place of images. For complete documentation on DataTables, visit their website at <a target="_blank" href="https://datatables.net/">https://datatables.net/</a>.</p>-->
                    <!--                            <a class="btn btn-default btn-lg btn-block" target="_blank" href="https://datatables.net/">View DataTables Documentation</a>-->
                    <!--                        </div>-->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->

</div>
<!-- /#page-wrapper -->

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
