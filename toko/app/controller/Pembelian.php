<?php

class Pembelian  extends Controller {
    public function index()
    {
      $data['judul'] = 'Data Pembelian';
      $data['pembelian'] = $this->model('pembelian_model')->getAllPembelian();
      $this->view('template/header', $data);
      $this->view('pembelian/index', $data);
      $this->view('template/footer');
    }

    public function detail($IdPembelian)
    {
      $data['judul'] = 'Detail Pembelian';
      $data['pembelian'] = $this->model('pembelian_model')->detail($IdPembelian);
      $this->view('template/header', $data);
      $this->view('pembelian/detail', $data);
      $this->view('template/footer');
    }

    public function tambah()
    {
      if($this->model('pembelian_model')->tambahPembelian($_POST) > 0 ) {
        Flasher::setFlash(' berhasil','ditambahkan','success');
        header('Location: ' .BASEURL. '/pembelian');
        exit;
      } else {
        Flasher::setFlash('gagal','ditambahkan','danger');
        header('Location: ' .BASEURL. '/pembelian');
        exit;
      }
    }

    public function hapus($IdPembelian)
    {
      if($this->model('pembelian_model')->hapusPembelian($IdPembelian) > 0 ) {
        Flasher::setFlash(' berhasil','dihapus','success');
        header('Location: ' .BASEURL. '/pembelian');
        exit;
      } else {
        Flasher::setFlash('gagal','dihapus','danger');
        header('Location: ' .BASEURL. '/pembelian');
        exit;
      }
    }

    public function getubah()
    {
      echo json_encode($this->model('pembelian_model')->detail($_POST['idpembelian']));
    }

    public function ubah()
    {
      if($this->model('pembelian_model')->ubahPembelian($_POST) > 0 ) {
        Flasher::setFlash(' berhasil','diubah','success');
        header('Location: ' .BASEURL. '/pembelian');
        exit;
      } else {
        Flasher::setFlash(' gagal','diubah','danger');
        header('Location: ' .BASEURL. '/pembelian');
        exit;
      }
      
    }
  }
