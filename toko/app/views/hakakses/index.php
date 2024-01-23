<div class="container mt-3">

<div class="row">
  <div class="col-lg-6">
    <?php Flasher::flasher();?>
</div>

<div class="row">
    <div class="col-lg-6">
        <button type="button" class="btn btn-primary tombolTambahDataAkses" data-bs-toggle="modal" data-bs-target="#formModalAkses">
        Tambah Hak Akses
        </button>
<br></br>
        <h3> Daftar Hak Akses </h3>
        <ul class='list-group'>
        <?php foreach( $data['hakakses'] as $hakakses ) : ?>
          <li class="list-group-item d-flex justify-content-between align-items-center">
    <?= $hakakses['NamaAkses']?>
    <div class="d-flex flex-column align-items-end">
    <a href="<?= BASEURL; ?>/hakakses/detail/<?= $hakakses['IdAkses']; ?>" class="btn btn-primary mb-1">Detail</a> 
<a href="<?= BASEURL; ?>/hakakses/ubah/<?= $hakakses['IdAkses']; ?>" class="btn btn-warning mb-1 tampilModalUbahAkses"
   data-bs-toggle="modal" data-bs-target="#formModalAkses" data-idakses="<?= $hakakses['IdAkses']; ?>">Edit</a>
<a href="<?= BASEURL; ?>/hakakses/hapus/<?= $hakakses['IdAkses']; ?>" class="btn btn-danger" onclick="return confirm('yakin?');">Delete</a>

    </div>
</li>

        <?php endforeach;?>
        </ul>
</div>
</div>

<div class="modal fade" id="formModalAkses" tabindex="-1" aria-labelledby="formModalAkses" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="formModalLabelAkses">Tambah Hak Akses</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      
      <form action="<?= BASEURL; ?>/hakakses/tambah" method="POST">
      <input type="hidden" name="idakses" id="idakses">
      
        <div class="form-grup">
            <label for="NamaAkses">Nama Hak Akses</label>
            <input type="text" class="form-control" id="NamaAkses" name="NamaAkses">
        </div>

        <div class="form-grup">
            <label for="Keterangan">Keterangan</label>
            <input type="text" class="form-control" id="Keterangan" name="Keterangan">
        </div>

        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data Hak Akses</button>
        </form>
      </div>
    </div>
  </div>
</div>