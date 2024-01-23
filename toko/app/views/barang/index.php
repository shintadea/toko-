<div class="container mt-3">

<div class="row">
  <div class="col-lg-6">
    <?php Flasher::flasher();?>
</div>

<div class="row">
    <div class="col-lg-6">
        <button type="button" class="btn btn-primary tombolTambahData" data-bs-toggle="modal" data-bs-target="#formModal">
        Tambah Barang
        </button>

<br></br>

        <h3> Daftar Barang </h3>
        <ul class='list-group'>
        <?php foreach( $data['barang'] as $barang ) : ?>
          <li class="list-group-item d-flex justify-content-between align-items-center">
    <?= $barang['NamaBarang']?>
    <div class="d-flex flex-column align-items-end">
        <a href="<?= BASEURL; ?>/barang/detail/<?= $barang['IdBarang']; ?>" class="btn btn-primary mb-1">Detail</a> 
        <a href="<?= BASEURL; ?>/barang/ubah/<?= $barang['IdBarang']; ?>" class="btn btn-warning mb-1 tampilModalUbah"
           data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $barang['IdBarang']; ?>">Edit</a>
        <a href="<?= BASEURL; ?>/barang/hapus/<?= $barang['IdBarang']; ?>" class="btn btn-danger" onclick="return confirm('yakin?');">Delete</a>
    </div>
</li>

        <?php endforeach;?>
        </ul>
</div>
</div>

<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="formModalLabel">Tambah Barang</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      
      <form action="<?= BASEURL; ?>/barang/tambah" method="POST">
      <input type="hidden" name="id" id="id">
      
        <div class="form-grup">
            <label for="NamaBarang">Nama Barang</label>
            <input type="text" class="form-control" id="NamaBarang" name="NamaBarang">
        </div>

        <div class="form-grup">
            <label for="Keterangan">Keterangan</label>
            <input type="text" class="form-control" id="Keterangan" name="Keterangan">
        </div>

        <div class="form-grup">
            <label for="Satuan">Satuan</label>
            <input type="number" class="form-control" id="Satuan" name="Satuan">
        </div>

        <div class="form=group">
            <label for="IdPengguna">Id Pengguna</label>
            <select class="form-control" id="IdPengguna" name="IdPengguna">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
        </select>  

        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>