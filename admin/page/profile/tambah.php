<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Input Data Tahun</h3>
    </div>

    <form method="POST">
        <div class="box-body">
            <div class="form-group">
                <label for="tahun">Nama</label>
                <input type="text" name="nama" id="tahun" class="form-control">
            </div>

            <div class="row">
                <div class="col-md-6 col-12">
                    <div class="form-group">
                        <label for="user">Username</label>
                        <input type="text" name="user" id="user" class="form-control">
                    </div>
                </div>

                <div class="col-md-6 col-12">
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="text" name="pass" id="password" class="form-control">
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

        $nama = $_POST['nama'];
        $user = $_POST['user'];
        $pass = $_POST['pass'];

        $sql = $koneksi->query("INSERT INTO tb_admin VALUES('', '$nama', '$user', '$pass')");

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