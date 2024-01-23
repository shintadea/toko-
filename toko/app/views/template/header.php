<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title> Halaman <?= $data['judul'];?></title>
        <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?= BASEURL; ?>">SSHOP</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= BASEURL; ?>">DASHBOARD</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="<?= BASEURL; ?>/barang">BARANG</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="<?= BASEURL; ?>/penjualan">PENJUALAN</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="<?= BASEURL; ?>/pengguna">PENGGUNA</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="<?= BASEURL; ?>/supplier">SUPPLIER</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="<?= BASEURL; ?>/hakakses">USER</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="<?= BASEURL; ?>/pembelian">PEMBELIAN</a>
        </li>
      </ul>
    </div>
    
  </div>
</nav>