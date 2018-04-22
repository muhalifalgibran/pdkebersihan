    <div class="container">
        <div class="atas-dikit">
            <div class="card">
                <h1 class="tengah">Data Perusahaan</h1>
                <div class="">
                    <div class="row">
                        <div class="col-lg-8 formulir">

                            <?php echo form_open_multipart('pelanggan/Pelanggan/pesanLayanan'); ?>

                            <div class="form-group">
                                <h3 >Jenis Layanan</h3>
                                <div class="input-group mb-3 atas-dikit2">
                                    <select class="custom-select" id="inputGroupSelect02" name="jenis">
                                        <option value="Bawah">Bawah</option>
                                        <option value="Menengah">Menengah</option>
                                        <option value="Atas">Atas</option>
                                    </select>
                                    <div class="input-group-append">
                                        <label class="input-group-text" for="inputGroupSelect02">Jenis Layanan</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <h3 >Layanan Tambahan</h3>
                                <div class="input-group-text">
                                            <input type="checkbox" name="tambahan[]" value="mobil sampah">mobil sampah (pengangkutan langsung ke lokasi)
                                </div>
                                <div class="input-group-text">
                                            <input type="checkbox" name="tambahan[]"  value="cleaning service">cleaning service
                                </div>
                                <div class="input-group-text">
                                            <input type="checkbox" name="tambahan[]"  value="kitchen service">kitchen service

                                </div>

                            </div>

                            <div class="form-group">
                                <h3 >Tanggal Service</h3>
                                <input type="date" name="tgl">
                                
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
<script>
    $('.carousel').carousel({
        interval: 100
    })
</script>
</body>
</html>

