<div class="container mt-3">

<div class="row">
  <div class="col-lg-6">
    <?php Flasher::flasher();?>
</div>

<div class="row">
    <div class="col-lg-6">
        <button type="button" class="btn btn-primary tombolTambahDataPembelian" data-bs-toggle="modal" data-bs-target="#formModalPembelian">
        Tambah Pembelian
        </button>
<br></br>
        <h3> Daftar Pembelian </h3>
        <ul class='list-group'>
        <?php foreach( $data['pembelian'] as $pembelian ) : ?>
          <li class="list-group-item d-flex justify-content-between align-items-center">
          <?= $pembelian['JumlahPembelian']?>
    <div class="d-flex flex-column align-items-end">
    <a href="<?= BASEURL; ?>/pembelian/detail/<?= $pembelian['IdPembelian']; ?>" class="btn btn-primary mb-1">Detail</a> 
<a href="<?= BASEURL; ?>/pembelian/ubah/<?= $pembelian['IdPembelian']; ?>" class="btn btn-warning mb-1 tampilModalUbahPembelian"
   data-bs-toggle="modal" data-bs-target="#formModalPembelian" data-idpembelian="<?= $pembelian['IdPembelian']; ?>">Edit</a>
<a href="<?= BASEURL; ?>/pembelian/hapus/<?= $pembelian['IdPembelian']; ?>" class="btn btn-danger" onclick="return confirm('yakin?');">Delete</a>

    </div>
</li>

        <?php endforeach;?>
        </ul>
</div>
</div>

<div class="modal fade" id="formModalPembelian" tabindex="-1" aria-labelledby="formModalPembelian" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="formModalLabelPembelian">Tambah Pembelian</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      
      <form action="<?= BASEURL; ?>/pembelian/tambah" method="POST">
      <input type="hidden" name="idpembelian" id="idpembelian">
      
        <div class="form-grup">
            <label for="JumlahPembelian">Jumlah Pembelian</label>
            <input type="text" class="form-control" id="JumlahPembelian" name="JumlahPembelian">
        </div>

        <div class="form-grup">
            <label for="HargaJual">Harga Jual</label>
            <input type="text" class="form-control" id="HargaJual" name="HargaJual">
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
        <button type="submit" class="btn btn-primary">Tambah Data Pembelian</button>
        </form>
      </div>
    </div>
  </div>
</div>