<div id="menghilang">
    <?php echo $this->session->flashdata('alert', true); ?>
</div>

<a class="btn btn-success m-2" href="<?= base_url('user/tambah') ?>">Tambah User</a>
    <div class="col-12">
         <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Data User</h6>
                <div class="table-responsive">
                    <table class="table">           
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Username</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Level</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                            <tbody>
                                 <?php $no=1; foreach($user as $aa) { ?>
                                    <tr>
                                        <th scope="row"><?= $no ?></th>
                                        <td><?= $aa['username']; ?></td>
                                        <td><?= $aa['nama']; ?></td>
                                        <td><?= $aa['level']; ?></td>
                                        <td>
                                            <a class="btn btn-sm btn-danger" onClick="return confirm('Apakah anda yakin ingin menghapus?')"
                                            href="<?= base_url('user/hapus/' .$aa['id_user']) ?>"><i class="fa fa-trash"></i></a>
                                            <a class="btn btn-sm btn-warning" 
                                            href="<?= base_url('user/edit/' .$aa['id_user']) ?>"><i class="fa fa-edit"></i></a>
                                        </td>
                                    </tr>
                                <?php $no++; } ?>              
                            </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
         <?php require_once('layout/_footer.php'); ?>
    </div>
</body>

</html>