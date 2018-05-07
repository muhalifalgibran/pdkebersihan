    <div class="container">
        <div class="atas-dikit">
        <div class="card">
            <h1 class="tengah">Data Perusahaan</h1>
            <div class="">
            <div class="row">
                <div class="col-lg-8 formulir">

                    <?php echo form_open_multipart('pelanggan/Pelanggan/profil'); ?>
                    <div class="form-group">
                        <input type="text" class="form-cust" id="user" name="nama_pendaftar" placeholder="Nama Pendaftar" required>
                    </div>
                    <div class="form-group">
                        <textarea name="alamat" class="form-cust-textarea" placeholder="Alamat Perusahaan" id="exampletextarea1" ></textarea>

                    </div>


                    <div class="input-group mb-3 atas-dikit1">
                        <div class="custom-file">
                            <input type="file" name="foto" class="custom-file-input" id="inputGroupFile02">
                            <label class="custom-file-label" for="inputGroupFile02">Foto Perusahaan</label>
                        </div>
                        <div class="input-group-append">

                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <div class="custom-file">
                            <input type="file" name="proposal" class="custom-file-input" id="inputGroupFile02">
                            <label class="custom-file-label" for="inputGroupFile02">Proposal Perusahaan</label>
                        </div>
                        <div class="input-group-append">

                        </div>
                    </div>
                    <button type="submit" name="submit" class="btn  btn-danger btn btn-outline-success btn-lg btn-block tombol-login">Simpan</button>
                    </form>
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

</body>
</html>