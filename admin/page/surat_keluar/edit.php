<?php 

    $id = $_GET['id'];

    $sql = $koneksi->query("SELECT * FROM tb_keluar where id_keluar='$id'");
    $tampil = $sql->fetch_assoc();

?>
<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Input Data Surat Keluar</h3>
    </div>

    <form method="POST">
        <div class="box-body">
            <div class="row">
                <div class="col-md-6 col-12">
                    <div class="form-group">
                        <label for="noBerkas">No. Berkas</label>
                        <input type="hidden" name="id" value="<?= $tampil['id_keluar'] ?>">
                        <input type="text" name="no_berkas" id="noBerkas" value="<?= $tampil['no_berkas'] ?>" class="form-control">
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="form-group">
                        <label for="namaAlalamatPengirim">Nama Alamat Penerima</label>
                        <input type="text" name="nama_penerima" id="namaAlalamatPengirim" value="<?= $tampil['nama_penerima'] ?>" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-12">
                    <div class="form-group">
                        <label for="TglSurat">Tanggal Surat</label>
                        <input type="date" name="tgl_surat" id="TglSurat" value="<?= $tampil['tanggal'] ?>" class="form-control">
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="form-group">
                        <label for="">Tahun</label>
                        <select name="tahun" class="form-control select2">
                            <option value="<?= $tampil['tahun'] ?>">==Jangan Diganti==</option>
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
                <textarea name="perihal" class="form-control" id="" cols="30" rows="10"><?= $tampil['perihal'] ?></textarea>
            </div>
        </div>
        <div class="box-footer">
            <button type="submit" name="simpan" id="btn" class="btn btn-success">Simpan</button>
        </div>
    </form>
</div>

<?php 

    if (isset($_POST['simpan'])){

        $id = $_POST['id'];
        $no_berkas = $_POST['no_berkas'];
        $nama_penerima = $_POST['nama_penerima'];
        $tgl_surat = $_POST['tgl_surat'];
        $tahun = $_POST['tahun'];
        $perihal = $_POST['perihal'];

        $sql = $koneksi->query("UPDATE tb_keluar SET no_berkas='$no_berkas', nama_penerima='$nama_penerima',
        tanggal='$tgl_surat', tahun='$tahun', perihal='$perihal' WHERE id_keluar='$id'");

        if ($sql){
            ?>
            <script type="text/javascript">
                alert("Data Berhasil Diedit");
                window.location.href="?page=keluar";
            </script>
            <?php
        } 
    }

?>


