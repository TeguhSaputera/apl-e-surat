<?php 

include_once "../../../koneksi/koneksi.php";

        $tahun = $_POST['tahun'];
        $tgl_awal  = $_POST['dari_tgl2'];
        $tgl_akhir = $_POST['sampai_tgl2'];

?>

<style>
    @media print{
        input.noPrint{
            display: none;
        }
    }

</style>

<center>
    <table>
        <tr>
            <td rowspan="3"><img src="../../../image/hst.png" width="100px" alt=""></td>
            <td width="88%" align="center" style="font-size:30px; font-family:arial;">Pemerintah Kabupaten Hulu Sungai Tengah</td>
        </tr>
        <tr>
            <td width="88%" align="center" style="font-size:25px; font-family:arial;">Kecamatan Labuan Amas Selatan</td>
        </tr>
        <tr>
            <td width="88%" align="center" style="font-size:25px; font-family:arial;">Kelurahan Pantai Hambawang Barat</td>
        </tr>
        <tr>
            <td colspan="2"><hr></td>
        </tr>
    </table>    
    <br><br>
    <p style="font-family: arial;"><u><b>Laporan Surat Keluar Tahun <?= $tahun ?><br>
    Dari Tanggal <?= $_POST['dari_tgl2'] ?> Sampai <?= $_POST['sampai_tgl2'] ?></b></u></p>
    <br>

    <table border="1" width="100%" style="border-collapse: collapse;">
        <tr>
            <th style="font-family: arial;">No</th>
            <th style="font-family: arial;">No. Berkas</th>
            <th style="font-family: arial;">Nama Penerima</th>
            <th style="font-family: arial;">Tanggal Surat</th>
            <th style="font-family: arial;">Perihal</th>
        </tr>
        <?php 

        $no = 1;

        $sql = mysqli_query($koneksi, "SELECT * FROM tb_keluar WHERE tahun='$tahun' AND tanggal BETWEEN '$tgl_awal' AND '$tgl_akhir'");
        while($data = mysqli_fetch_array($sql)){
        ?>
        <tr>
            <td style="font-family: arial;"><center><?= $no++; ?></center></td>
            <td style="font-family: arial;"><?= $data['no_berkas'] ?></td>
            <td style="font-family: arial;"><?= $data['nama_penerima'] ?></td>
            <td style="font-family: arial;"><?= $data['tanggal'] ?></td>
            <td style="font-family: arial;"><?= $data['perihal'] ?></td>
        </tr>
        <?php } ?>
    </table>
</center>

<script>
    window.print();
</script>