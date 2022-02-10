<?php 

    $id = $_GET['id'];

    $sql = $koneksi->query("DELETE FROM tb_tahun WHERE id_tahun='$id'");

    if ($sql){
        ?>
        <script>
            alert("Data Berhasil Dihapus");
            window.location.href="?page=tahun";
        </script>
        <?php
    }

?>