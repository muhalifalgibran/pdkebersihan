<div class="container">
    <div class="atas-dikit">
        <div class="card">
            <h1 class="tengah">Proposal Tawaran</h1>
            <div class="">
                <div class="">
                    <div class="">

                        <table class="table">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Proposal</th>
                                <th scope="col">Keterangan</th>
                                <th scope="col">Status</th>
                                <th scope="col">Hapus</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $no = 1;
                            foreach ($penawaran as $key){
                            ?>
                            <tr>
                                <th scope="row"><?php echo $no ?></th>
                                <td><a href="<?php echo base_url()?>pelanggan/Pelanggan/download/<?php echo $key->proposal ?>"><button type="button"  class="btn btn-outline-secondary">Download</button></a></td>
                                <td><?php echo $key->keterangan ?></td>
                                <td><?php echo $key->statusPenawaran?></td>
                                <td>
                                    <a href="<?php echo base_url()?>pelanggan/Pelanggan/editStatus/<?php echo $key->idProposal ?>/setuju"><button type="button" class="btn btn-outline-success" >Setuju</button></a>
                                    <a href="<?php echo base_url()?>pelanggan/Pelanggan/editStatus/<?php echo $key->idProposal ?>/batalSetuju"><button type="button" class="btn btn-outline-secondary" >Batal Setuju</button></a>
                                    <a href="<?php echo base_url()?>pelanggan/Pelanggan/hapusPenawaran/<?php echo $key->idProposal ?>"><button type="button" class="btn btn-outline-danger" >Hapus</button></a>
                                </td>
                            </tr>

                            </tbody>

                            <?php $no++;
                            } ?>

                        </table>
                       <div class="row">
                        <div class="col">
                            <!--Tampilkan pagination-->
                            <?php echo $pagination;
                          ?>
                        </div>
                    </div>

                    </div>
                </div>
            </div>
            <img src="<?php echo base_url()?>assets/res/logo2.png" alt="">

        </div>
    </div>
</div>

</div>


<script src="<?php echo base_url()?>assets/node_modules/js/jquery.js"></script>
<script src="<?php echo base_url()?>assets/node_modules/js/bootstrap.min.js"></script>
<script src="<?php echo base_url()?>assets/node_modules/4/bootstrap.min.js"></script>
<script>
    $('.carousel').carousel({
        interval: 100
    })
</script>
</body>
</html>

