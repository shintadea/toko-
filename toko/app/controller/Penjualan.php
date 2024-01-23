<?php

class Penjualan extends Controller {
    public function index()
    {
      $data['judul'] = 'Data Penjualan';
      $data['penjualan'] = $this->model('penjualan_model')->getAllPenjualan();
      $this->view('template/header', $data);
      $this->view('penjualan/index', $data);
      $this->view('template/footer');
    }

    public function detail($IdPenjualan)
    {
      $data['judul'] = 'Detail Penjualan';
      $data['penjualan'] = $this->model('penjualan_model')->detail($IdPenjualan);
      $this->view('template/header', $data);
      $this->view('penjualan/detail', $data);
      $this->view('template/footer');
    }

    public function tambah()
    {
      if($this->model('penjualan_model')->tambahPenjualan($_POST) > 0 ) {
        Flasher::setFlash(' berhasil','ditambahkan','success');
        header('Location: ' .BASEURL. '/penjualan');
        exit;
      } else {
        Flasher::setFlash('gagal','ditambahkan','danger');
        header('Location: ' .BASEURL. '/penjualan');
        exit;
      }
    }

    public function hapus($IdPenjualan)
    {
      if($this->model('penjualan_model')->hapusPenjualan($IdPenjualan) > 0 ) {
        Flasher::setFlash(' berhasil','dihapus','success');
        header('Location: ' .BASEURL. '/penjualan');
        exit;
      } else {
        Flasher::setFlash('gagal','dihapus','danger');
        header('Location: ' .BASEURL. '/penjualan');
        exit;
      }
    }

    public function getubah()
    {
      echo json_encode($this->model('penjualan_model')->detail($_POST['idpenjualan']));
    }

    public function ubah()
    {
      if($this->model('penjualan_model')->ubahPenjualan($_POST) > 0 ) {
        Flasher::setFlash(' berhasil','diubah','success');
        header('Location: ' .BASEURL. '/penjualan');
        exit;
      } else {
        Flasher::setFlash(' gagal','diubah','danger');
        header('Location: ' .BASEURL. '/penjualan');
        exit;
      }
      
    }
  }
