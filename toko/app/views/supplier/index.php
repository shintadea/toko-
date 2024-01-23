<div class="container mt-3">

<div class="row">
  <div class="col-lg-6">
    <?php Flasher::flasher();?>
</div>

<div class="row">
    <div class="col-lg-6">
        <button type="button" class="btn btn-primary tombolTambahDataSupplier" data-bs-toggle="modal" data-bs-target="#formModalSupplier">
        Tambah Supplier
        </button>
<br></br>
        <h3> Daftar Supplier </h3>
        <ul class='list-group'>
        <?php foreach( $data['supplier'] as $supplier ) : ?>
          <li class="list-group-item d-flex justify-content-between align-items-center">
    <?= $supplier['NamaSupplier']?>
    <div class="d-flex flex-column align-items-end">
    <a href="<?= BASEURL; ?>/supplier/detail/<?= $supplier['IdSupplier']; ?>" class="btn btn-primary mb-1">Detail</a> 
<a href="<?= BASEURL; ?>/supplier/ubah/<?= $supplier['IdSupplier']; ?>" class="btn btn-warning mb-1 tampilModalUbahSupplier"
   data-bs-toggle="modal" data-bs-target="#formModalSupplier" data-idsupplier="<?= $supplier['IdSupplier']; ?>">Edit</a>
<a href="<?= BASEURL; ?>/supplier/hapus/<?= $supplier['IdSupplier']; ?>" class="btn btn-danger" onclick="return confirm('yakin?');">Delete</a>

    </div>
</li>

        <?php endforeach;?>
        </ul>
</div>
</div>

<div class="modal fade" id="formModalSupplier" tabindex="-1" aria-labelledby="formModalSupplier" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="formModalLabelSupplier">Tambah Supplier</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      
      <form action="<?= BASEURL; ?>/supplier/tambah" method="POST">
      <input type="hidden" name="idsupplier" id="idsupplier">
      
        <div class="form-grup">
            <label for="NamaSupplier">Nama Supplier</label>
            <input type="text" class="form-control" id="NamaSupplier" name="NamaSupplier">
        </div>

        <div class="form-grup">
            <label for="Alamat">Alamat</label>
            <input type="text" class="form-control" id="Alamat" name="Alamat">
        </div>

        <div class="form-grup">
            <label for="NoSupplier">No Hp Supplier</label>
            <input type="number" class="form-control" id="NoSupplier" name="NoSupplier">
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

        <div class="form=group">
            <label for="IdBarang">Id Barang</label>
            <select class="form-control" id="IdBarang" name="IdBarang">
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
        <button type="submit" class="btn btn-primary">Tambah Data Supplier</button>
        </form>
      </div>
    </div>
  </div>
</div>