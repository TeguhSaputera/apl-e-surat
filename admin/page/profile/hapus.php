<?php 

    $id = $_GET['id'];

    $sql = $koneksi->query("DELETE FROM tb_admin WHERE id='$id'");

    if ($sql){
        ?>
        <script>
            alert("Data Berhasil Dihapus");
            window.location.href="?page=profile";
        </script>
        <?php
    }

?>