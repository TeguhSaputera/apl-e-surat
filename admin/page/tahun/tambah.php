<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Input Data Tahun</h3>
    </div>

    <form method="POST">
        <div class="box-body">
            <div class="form-group">
                <label for="tahun">Tahun</label>
                <input type="text" name="tahun" id="tahun" class="form-control">
            </div>
        </div>
        <div class="box-footer">
            <button type="submit" name="simpan" id="btn" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>

<?php 

    if (isset($_POST['simpan'])){

        $tahun = $_POST['tahun'];

        $sql = $koneksi->query("INSERT INTO tb_tahun VALUES('', '$tahun')");

        if ($sql){
            ?>
            <script type="text/javascript">
                alert("Data Berhasil Disimpan");
                window.location.href="?page=tahun";
            </script>
            <?php
        } 
    }

?>