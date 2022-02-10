<?php 

    $id = $_GET['id'];

    $sql = $koneksi->query("SELECT * FROM tb_admin where id='$id'");
    $tampil = $sql->fetch_assoc();

?>
<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Edit Data Profile</h3>
    </div>

    <form method="POST">
        <div class="box-body">
            <div class="form-group">
                <label for="tahun">Nama</label>
                <input type="text" name="nama" id="tahun" value="<?= $tampil['nama'] ?>" class="form-control">
                <input type="hidden" name="id_nama" value="<?= $tampil['id'] ?>">
            </div>

            <div class="row">
                <div class="col-md-6 col-12">
                    <div class="form-group">
                        <label for="user">Username</label>
                        <input type="text" name="user" id="user" value="<?= $tampil['username'] ?>" class="form-control">
                    </div>
                </div>

                <div class="col-md-6 col-12">
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="text" name="pass" id="password" value="<?= $tampil['pass'] ?>" class="form-control">
                    </div>
                </div>
            </div>
        </div>
        <div class="box-footer">
            <button type="submit" name="simpan" id="btn" class="btn btn-primary">Simpan</button>
        </div>
    </form>
</div>

<?php 

    if (isset($_POST['simpan'])){

        $id = $_POST['id_nama'];
        $nama = $_POST['nama'];
        $user = $_POST['user'];
        $pass = $_POST['pass'];

        $sql = $koneksi->query("UPDATE tb_admin SET nama='$nama', username='$user', pass='$pass' WHERE id='$id'");

        if ($sql){
            ?>
            <script type="text/javascript">
                alert("Data Berhasil Disimpan");
                window.location.href="?page=profile";
            </script>
            <?php
        } 
    }

?>