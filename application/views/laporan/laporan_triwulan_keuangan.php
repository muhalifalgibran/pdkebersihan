


<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Laporan per-Triwulan</h1>
            <a href="#" class="pull-right forgot"><?php echo $this->session->flashdata('update');?></a>

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


                    <?php //echo form_open('kasie-dashboard') ?>
                    <button type="submit" class="btn btn-secondary"><a href="<?php echo base_url() ?>bidangKeuangan/BidangKeuangan/bulanan/1">Triwulan 1</a></button>
                    <button type="submit" class="btn btn-secondary"><a href="<?php echo base_url() ?>bidangKeuangan/BidangKeuangan/bulanan/2">Triwulan 2</a></button>
                    <button type="submit" class="btn btn-secondary"><a href="<?php echo base_url() ?>bidangKeuangan/BidangKeuangan/bulanan/3">Triwulan 3</a></button>
                    <button type="submit" class="btn btn-secondary"><a href="<?php echo base_url() ?>bidangKeuangan/BidangKeuangan/bulanan/4">Triwulan 4</a></button>

                    <!--                    </form>-->

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
<?php
/**
 * Created by PhpStorm.
 * User: Muh. Alif Al-Gibran
 * Date: 5/6/2018
 * Time: 12:51 PM
 */