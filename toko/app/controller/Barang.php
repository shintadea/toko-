<?php

class Barang extends Controller {
    public function index()
    {
      $data['judul'] = 'Data Barang';
      $data['barang'] = $this->model('barang_model')->getAllBarang();
      $this->view('template/header', $data);
      $this->view('barang/index', $data);
      $this->view('template/footer');
    }

    public function detail($id)
    {
      $data['judul'] = 'Detail Barang';
      $data['barang'] = $this->model('barang_model')->getBarangById($id);
      $this->view('template/header', $data);
      $this->view('barang/detail', $data);
      $this->view('template/footer');
    }

    public function tambah()
    {
      if($this->model('barang_model')->tambahBarang($_POST) > 0 ) {
        Flasher::setFlash(' berhasil','ditambahkan','success');
        header('Location: ' .BASEURL. '/barang');
        exit;
      } else {
        Flasher::setFlash('gagal','ditambahkan','danger');
        header('Location: ' .BASEURL. '/barang');
        exit;
      }
    }

    public function hapus($IdBarang)
    {
      if($this->model('barang_model')->hapusBarang($IdBarang) > 0 ) {
        Flasher::setFlash(' berhasil','dihapus','success');
        header('Location: ' .BASEURL. '/barang');
        exit;
      } else {
        Flasher::setFlash('gagal','dihapus','danger');
        header('Location: ' .BASEURL. '/barang');
        exit;
      }
    }

    public function getubah($id)
    {
      echo json_encode($this->model('barang_model')->detail($_POST['id']));
    }

    public function ubah()
    {
      if($this->model('barang_model')->ubahBarang($_POST) > 0 ) {
        Flasher::setFlash(' berhasil','diubah','success');
        header('Location: ' .BASEURL. '/barang');
        exit;
      } else {
        Flasher::setFlash(' gagal','diubah','danger');
        header('Location: ' .BASEURL. '/barang');
        exit;
      }
      
    }
  }
