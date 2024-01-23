<div class="container mt-3">

<div class="row">
  <div class="col-lg-6">
    <?php Flasher::flasher();?>
</div>

<div class="row">
    <div class="col-lg-6">
        <button type="button" class="btn btn-primary tombolTambahDataPenjualan" data-bs-toggle="modal" data-bs-target="#formModalPenjualan">
        Tambah Penjualan
        </button>
<br></br>
        <h3> Daftar Penjualan </h3>
        <ul class='list-group'>
        <?php foreach( $data['penjualan'] as $penjualan ) : ?>
          <li class="list-group-item d-flex justify-content-between align-items-center">
    <?= $penjualan['JumlahPenjualan']?>
    <div class="d-flex flex-column align-items-end">
    <a href="<?= BASEURL; ?>/penjualan/detail/<?= $penjualan['IdPenjualan']; ?>" class="btn btn-primary mb-1">Detail</a> 
<a href="<?= BASEURL; ?>/penjualan/ubah/<?= $penjualan['IdPenjualan']; ?>" class="btn btn-warning mb-1 tampilModalUbahPenjualan"
   data-bs-toggle="modal" data-bs-target="#formModalPenjualan" data-idpenjualan="<?= $penjualan['IdPenjualan']; ?>">Edit</a>
<a href="<?= BASEURL; ?>/penjualan/hapus/<?= $penjualan['IdPenjualan']; ?>" class="btn btn-danger" onclick="return confirm('yakin?');">Delete</a>

    </div>
</li>

        <?php endforeach;?>
        </ul>
</div>
</div>

<div class="modal fade" id="formModalPenjualan" tabindex="-1" aria-labelledby="formModalPenjualan" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="formModalLabelPenjualan">Tambah Penjualan</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      
      <form action="<?= BASEURL; ?>/penjualan/tambah" method="POST">
      <input type="hidden" name="idpenjualan" id="idpenjualan">
      
        <div class="form-grup">
            <label for="JumlahPenjualan">Jumlah Penjualan</label>
            <input type="text" class="form-control" id="JumlahPenjualan" name="JumlahPenjualan">
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
        <button type="submit" class="btn btn-primary">Tambah Data Penjualan</button>
        </form>
      </div>
    </div>
  </div>
</div>