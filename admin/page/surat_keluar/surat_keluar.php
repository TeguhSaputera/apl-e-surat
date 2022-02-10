<a href="?page=keluar&aksi=tambah" class="btn btn-success btn-sm mb-3"><i class="fa fa-plus-square"></i> Tambah Data</a>

<div class="content">
    <div class="row">
    <div class="col xs-12">
         <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Surat Keluar</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>No. Berkas</th>
                  <th>Nama Alamat Penerima</th>
                  <th>Tanggal Surat</th>
                  <th>Tahun</th>
                  <th>Perihal</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                    <?php 
                    $no = 1;
                    $data = mysqli_query($koneksi,"select * from tb_keluar");
                    while($item = mysqli_fetch_array($data)){
                    ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $item['no_berkas']; ?></td>
                  <td><?php echo $item['nama_penerima']; ?></td>
                  <td><?php echo $item['tanggal']; ?></td>
                  <td><?php echo $item['tahun']; ?></td>
                  <td><?php echo $item['perihal']; ?></td>
                  <td>
                      <a href="?page=keluar&aksi=edit&id=<?php echo $item['id_keluar'] ?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                      <a onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?')" 
                      href="?page=keluar&aksi=hapus&id=<?php echo $item['id_keluar'] ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></a>
                  </td>
                </tr>

                <?php } ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
    </div>
</div>
</div>

