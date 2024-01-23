<div class="container mt-5">

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?= $data['pengguna']['NamaPengguna'];?></h5>
    <h6 class="card-subtitle mb-2 text-body-secondary"><?= $data['pengguna']['IdAkses'];?></h6>
    <p class="card-text"><?= $data['pengguna']['NamaDepan'];?></p>
    <p class="card-text"><?= $data['pengguna']['NamaBelakang'];?></p>
    <p class="card-text"><?= $data['pengguna']['NoHp'];?></p>
    <p class="card-text"><?= $data['pengguna']['Alamat'];?></p>
    <a href="<?= BASEURL; ?>/pengguna" class="card-link">Back</a>
  </div>
</div>



</div>