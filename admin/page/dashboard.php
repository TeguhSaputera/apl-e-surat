<?php 

  $data_masuk = mysqli_query($koneksi, "SELECT * FROM tb_masuk");
  $data_keluar = mysqli_query($koneksi, "SELECT * FROM tb_keluar");

  $jumlah_masuk = mysqli_num_rows($data_masuk);
  $jumlah_keluar = mysqli_num_rows($data_keluar);

?>
<div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?= $jumlah_masuk; ?></h3>

              <p>Surat Masuk</p>
            </div>
            <div class="icon">
              <i class="fa fa-envelope"></i>
            </div>
            <a href="#" class="small-box-footer">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?= $jumlah_keluar ?></h3>

              <p>Surat Keluar</p>
            </div>
            <div class="icon">
              <i class="fa fa-envelope-o"></i>
            </div>
            <a href="#" class="small-box-footer">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
      </div>