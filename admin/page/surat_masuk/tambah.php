<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Input Data Surat Masuk</h3>
    </div>

    <form method="POST">
        <div class="box-body">
            <div class="row">
                <div class="col-md-6 col-12">
                    <div class="form-group">
                        <label for="noBerkas">No. Berkas</label>
                        <input type="text" name="no_berkas" id="noBerkas" class="form-control">
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="form-group">
                        <label for="namaAlalamatPengirim">Nama Alamat Pengirim</label>
                        <input type="text" name="alamat_pengirim" id="namaAlalamatPengirim" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-12">
                    <div class="form-group">
                        <label for="TglSurat">Tanggal Surat</label>
                        <input type="date" name="tgl_surat" id="TglSurat" class="form-control">
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="form-group">
                        <label for="noSurat">No. Surat</label>
                        <input type="text" name="no_surat" id="noSurat" class="form-control">
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="form-group">
                        <label for="">Tahun</label>
                        <select name="tahun" class="form-control select2">
                            <option value="">==Pilih Tahun==</option>
                            <?php 
                                $sql = $koneksi->query("SELECT * FROM tb_tahun");
                                while ($data = mysqli_fetch_array($sql)){
                                    ?>
                                <option value="<?= $data['nama_tahun'] ?>"><?= $data['nama_tahun'] ?></option>
                                    <?php
                                } 
                            ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="">Perihal</label>
                <textarea name="perihal" class="form-control" id="" cols="30" rows="10"></textarea>
            </div>
        </div>
        <div class="box-footer">
            <button type="submit" name="simpan" id="btn" class="btn btn-success">Simpan</button>
        </div>
    </form>
</div>

<?php 

    if (isset($_POST['simpan'])){

        $no_berkas = $_POST['no_berkas'];
        $alamat_pengirim = $_POST['alamat_pengirim'];
        $tgl_surat = $_POST['tgl_surat'];
        $no_surat = $_POST['no_surat'];
        $tahun = $_POST['tahun'];
        $perihal = $_POST['perihal'];

        $sql = $koneksi->query("INSERT INTO tb_masuk (no_berkas, nama_alamat_pengirim,
        tgl_surat, no_surat, tahun, perihal) VALUES('$no_berkas', '$alamat_pengirim', '$tgl_surat', 
        '$no_surat', '$tahun', '$perihal')");

        if ($sql){
            ?>
            <script type="text/javascript">
                alert("Data Berhasil Disimpan");
                window.location.href="?page=masuk";
            </script>
            <?php
        } 
    }

?>

