<div class="container mt-3">

<div class="row">
  <div class="col-lg-6">
    <?php Flasher::flasher();?>
</div>

<div class="row">
    <div class="col-lg-6">
        <button type="button" class="btn btn-primary tombolTambahDataPengguna" data-bs-toggle="modal" data-bs-target="#formModalPengguna">
        Tambah Pengguna
        </button>
<br></br>
        <h3> Daftar Pengguna </h3>
        <ul class='list-group'>
        <?php foreach( $data['pengguna'] as $pengguna ) : ?>
          <li class="list-group-item d-flex justify-content-between align-items-center">
    <?= $pengguna['NamaPengguna']?>
    <div class="d-flex flex-column align-items-end">
    <a href="<?= BASEURL; ?>/pengguna/detail/<?= $pengguna['IdPengguna']; ?>" class="btn btn-primary mb-1">Detail</a> 
<a href="<?= BASEURL; ?>/pengguna/ubah/<?= $pengguna['IdPengguna']; ?>" class="btn btn-warning mb-1 tampilModalUbahPengguna"
   data-bs-toggle="modal" data-bs-target="#formModalPengguna" data-idpengguna="<?= $pengguna['IdPengguna']; ?>">Edit</a>
<a href="<?= BASEURL; ?>/pengguna/hapus/<?= $pengguna['IdPengguna']; ?>" class="btn btn-danger" onclick="return confirm('yakin?');">Delete</a>

    </div>
</li>

        <?php endforeach;?>
        </ul>
</div>
</div>

<div class="modal fade" id="formModalPengguna" tabindex="-1" aria-labelledby="formModalPengguna" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="formModalLabelPengguna">Tambah Pengguna</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      
      <form action="<?= BASEURL; ?>/pengguna/tambah" method="POST">
      <input type="hidden" name="idpengguna" id="idpengguna">
      
        <div class="form-grup">
            <label for="NamaPengguna">Nama Pengguna</label>
            <input type="text" class="form-control" id="NamaPengguna" name="NamaPengguna">
        </div>

        <div class="form-grup">
            <label for="Password">Password</label>
            <input type="password" class="form-control" id="Password" name="Password">
        </div>

        <div class="form-grup">
            <label for="NamaDepan">Nama Depan</label>
            <input type="text" class="form-control" id="NamaDepan" name="NamaDepan">
        </div>

        <div class="form-grup">
            <label for="NamaBelakang">Nama Belakang</label>
            <input type="text" class="form-control" id="NamaBelakang" name="NamaBelakang">
        </div>

        <div class="form-grup">
            <label for="NoHp">No HP</label>
            <input type="text" class="form-control" id="NoHp" name="NoHp">
        </div>

        <div class="form-grup">
            <label for="Alamat">Alamat</label>
            <input type="text" class="form-control" id="Alamat" name="Alamat">
        </div>

        <div class="form=group">
            <label for="IdAkses">Id Akses</label>
            <select class="form-control" id="IdAkses" name="IdAkses">
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
        <button type="submit" class="btn btn-primary">Tambah Data Pengguna</button>
        </form>
      </div>
    </div>
  </div>
</div>