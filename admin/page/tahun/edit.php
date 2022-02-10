<?php 

    $id = $_GET['id'];

    $sql = $koneksi->query("SELECT * FROM tb_tahun where id_tahun='$id'");
    $tampil = $sql->fetch_assoc();

?>
<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Edit Data Tahun</h3>
    </div>

    <form method="POST">
        <div class="box-body">
            <div class="form-group">
                <label for="tahun">Tahun</label>
                <input type="hidden" name="id" value="<?= $tampil['id_tahun'] ?>">
                <input type="text" name="tahun" id="tahun" value="<?php echo $tampil['nama_tahun'] ?>" class="form-control">
            </div>
        </div>
        <div class="box-footer">
            <button type="submit" name="edit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>

<?php 

    if (isset($_POST['edit'])){

        $kode = $_POST['id'];
        $tahun = $_POST['tahun'];

        $sql = $koneksi->query("UPDATE tb_tahun SET nama_tahun='$tahun' WHERE id_tahun='$kode'");

        if ($sql){
            ?>
            <script type="text/javascript">
                alert("Data Berhasil Diedit");
                window.location.href="?page=tahun";
            </script>
            <?php
        } 
    }

?>