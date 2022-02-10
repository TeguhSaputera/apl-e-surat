<?php 

    $id = $_GET['id'];

    $sql = $koneksi->query("DELETE FROM tb_masuk WHERE id_masuk='$id'");

    if ($sql){
        ?>
        <script>
            alert("Data Berhasil Dihapus");
            window.location.href="?page=masuk";
        </script>
        <?php
    }

?>