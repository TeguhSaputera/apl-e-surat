<a href="?page=tahun&aksi=tambah" class="btn btn-success btn-sm mb-3"><i class="fa fa-plus-square"></i> Tambah Data</a>

<div class="content">
    <div class="row">
    <div class="col xs-12">
         <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Tahun</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Tahun</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                    <?php 
                    $no = 1;
                    $data = mysqli_query($koneksi,"select * from tb_tahun");
                    while($item = mysqli_fetch_array($data)){
                    ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $item['nama_tahun']; ?></td>
                  <td>
                      <a href="?page=tahun&aksi=edit&id=<?php echo $item['id_tahun'] ?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                      <a onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?')" 
                      href="?page=tahun&aksi=hapus&id=<?php echo $item['id_tahun'] ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></a>
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