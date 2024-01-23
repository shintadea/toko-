<div class="container mt-5">

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?= $data['supplier']['NamaSupplier'];?></h5>
    <h6 class="card-subtitle mb-2 text-body-secondary"><?= $data['supplier']['Alamat'];?></h6>
    <p class="card-text"><?= $data['supplier']['NoSupplier'];?></p>
    <p class="card-text"><?= $data['supplier']['IdPengguna'];?></p>
    <p class="card-text"><?= $data['supplier']['IdBarang'];?></p>
    <a href="<?= BASEURL; ?>/penjualan" class="card-link">Back</a>
  </div>
</div>



</div>