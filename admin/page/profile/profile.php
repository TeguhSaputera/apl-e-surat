<a href="?page=profile&aksi=tambah" class="btn btn-success btn-sm mb-3"><i class="fa fa-plus-square"></i> Tambah Data</a>

<div class="content">
    <div class="row">
    <div class="col xs-12">
         <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Profile</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Lengkap</th>
                  <th>Username</th>
                  <th>Password</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                    <?php 
                    $no = 1;
                    $data = mysqli_query($koneksi,"SELECT * FROM tb_admin");
                    while($item = mysqli_fetch_array($data)){
                    ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $item['nama']; ?></td>
                  <td><?php echo $item['username']; ?></td>
                  <td><?php echo $item['pass']; ?></td>
                  <td>
                      <a href="?page=profile&aksi=edit&id=<?php echo $item['id'] ?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                      <a onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?')" 
                      href="?page=profile&aksi=hapus&id=<?php echo $item['id'] ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></a>
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