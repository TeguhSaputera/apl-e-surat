<!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">Laporan Surat Masuk</a></li>
              <li><a href="#tab_2" data-toggle="tab">Laporan Surat Keluar</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
                <form method="POST" action="page/laporan/laporan_masuk.php">
                    <div class="row">
                        <div class="col-md-4 col-12">
                            <div class="form-group">
                                <label for="">Tahun</label>
                                <select name="tahun" class="form-control">
                                    <option value="">==Pilih Tahun==</option>
                                    <?php 
                                        $sql1 = mysqli_query($koneksi, "SELECT * FROM tb_tahun");
                                        while($item = mysqli_fetch_array($sql1)){
                                            ?>
                                            <option value="<?= $item['nama_tahun'] ?>"><?= $item['nama_tahun'] ?></option>
                                            <?php
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-4 col-12">
                            <div class="from-group">
                                <label for="">Dari Tanggal</label>
                                <input type="date" name="dari_tgl" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-4 col-12">
                            <div class="from-group">
                                <label for="">Sampai Tanggal</label>
                                <input type="date" name="sampai_tgl" class="form-control">
                            </div>
                        </div>
                    </div>
                    <button type="submit" name="cetak" class="btn btn-primary btn-sm"><i class="fa fa-print"></i> Cetak Laporan</button>
                </form>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">
                <form method="POST" action="page/laporan/laporan_keluar.php">
                    <div class="row">
                        <div class="col-md-4 col-12">
                            <div class="form-group">
                                <label for="">Tahun</label>
                                <select name="tahun" class="form-control">
                                    <option value="">==Pilih Tahun==</option>
                                    <?php 
                                        $sql2 = mysqli_query($koneksi, "SELECT * FROM tb_tahun");
                                        while($item = mysqli_fetch_array($sql2)){
                                            ?>
                                            <option value="<?= $item['nama_tahun'] ?>"><?= $item['nama_tahun'] ?></option>
                                            <?php
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-4 col-12">
                            <div class="from-group">
                                <label for="">Dari Tanggal</label>
                                <input type="date" name="dari_tgl2" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-4 col-12">
                            <div class="from-group">
                                <label for="">Sampai Tanggal</label>
                                <input type="date" name="sampai_tgl2" class="form-control">
                            </div>
                        </div>
                    </div>
                    <button type="submit" name="cetak2" class="btn btn-primary btn-sm"><i class="fa fa-print"></i> Cetak Laporan</button>
                </form>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->

          