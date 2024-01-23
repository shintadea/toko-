<div class="container mt-5">

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?= $data['pembelian']['IdPembelian'];?></h5>
    <h6 class="card-subtitle mb-2 text-body-secondary"><?= $data['pembelian']['JumlahPembelian'];?></h6>
    <p class="card-text"><?= $data['pembelian']['HargaBeli'];?></p>
    <p class="card-text"><?= $data['pembelian']['IdPengguna'];?></p>
    <a href="<?= BASEURL; ?>/pembelian" class="card-link">Back</a>
  </div>
</div>



</div>