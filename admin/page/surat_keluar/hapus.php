<?php 

    $id = $_GET['id'];

    $sql = $koneksi->query("DELETE FROM tb_keluar WHERE id_keluar='$id'");

    if ($sql){
        ?>
        <script>
            alert("Data Berhasil Dihapus");
            window.location.href="?page=keluar";
        </script>
        <?php
    }

?>