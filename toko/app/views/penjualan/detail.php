<div class="container mt-5">

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?= $data['penjualan']['JumlahPenjualan'];?></h5>
    <h6 class="card-subtitle mb-2 text-body-secondary"><?= $data['penjualan']['HargaJual'];?></h6>
    <p class="card-text"><?= $data['penjualan']['HargaJual'];?></p>
    <p class="card-text"><?= $data['penjualan']['IdPengguna'];?></p>
    <a href="<?= BASEURL; ?>/penjualan" class="card-link">Back</a>
  </div>
</div>



</div>