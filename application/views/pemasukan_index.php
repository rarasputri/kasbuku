<div id="menghilang">
    <?php echo $this->session->flashdata('alert', true); ?>
</div>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Tambah Pemasukan
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah pemasukan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="<?= base_url('pemasukan/simpan')?>" method="post">
      <div class="modal-body">
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Keterangan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="keterangan">
                        </div>
                </div>
                <div class="row mb-3">
                     <label class="col-sm-2 col-form-label">Nominal</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" name="nominal" >
                        </div>
                </div>
                <div class="row mb-3">
                     <label  class="col-sm-2 col-form-label">Tanggal</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" name="tanggal" >
                    </div>
                </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>
    <div class="col-12">
         <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Data Pemasukan</h6>
                <div class="table-responsive">
                    <table class="table">           
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Tanggal</th>
                                <?php if($this->session->userdata('level')=='admin'){ ?>
                                    <th scope="col">Username</th>
                                <?php } ?>
                                <th scope="col">Keterangan</th>
                                <th scope="col">Nominal</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                            <tbody>
                                 <?php $no=1; foreach($pemasukan as $aa) { ?>
                                    <tr>
                                        <th scope="row"><?= $no ?></th>
                                        <td><?= $aa['tanggal']; ?></td>
                                        <?php if($this->session->userdata('level')=='admin'){ ?>
                                            <td><?= $aa['username']; ?></td>
                                        <?php } ?>
                                        <td><?= $aa['keterangan']; ?></td>
                                        <td >Rp.<?= number_format($aa['nominal']); ?></td>
                                        <td>
                                            <a class="btn btn-sm btn-danger" onClick="return confirm('Apakah anda yakin ingin menghapus?')"
                                            href="<?= base_url('pemasukan/hapus/' .$aa['id_transaksi']) ?>"><i class="fa fa-trash"></i></a>
                                            
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

</html