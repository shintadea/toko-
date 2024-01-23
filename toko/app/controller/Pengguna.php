<?php

class Pengguna extends Controller {
    public function index()
    {
      $data['judul'] = 'Data Pengguna';
      $data['pengguna'] = $this->model('pengguna_model')->getAllPengguna();
      $this->view('template/header', $data);
      $this->view('pengguna/index', $data);
      $this->view('template/footer');
    }

    public function detail($IdPengguna)
    {
      $data['judul'] = 'Detail Pengguna';
      $data['pengguna'] = $this->model('pengguna_model')->detail($IdPengguna);
      $this->view('template/header', $data);
      $this->view('pengguna/detail', $data);
      $this->view('template/footer');
    }

    public function tambah()
    {
      if($this->model('pengguna_model')->tambahPengguna($_POST) > 0 ) {
        Flasher::setFlash(' berhasil','ditambahkan','success');
        header('Location: ' .BASEURL. '/pengguna');
        exit;
      } else {
        Flasher::setFlash('gagal','ditambahkan','danger');
        header('Location: ' .BASEURL. '/pengguna');
        exit;
      }
    }

    public function hapus($IdPengguna)
    {
      if($this->model('pengguna_model')->hapusPengguna($IdPengguna) > 0 ) {
        Flasher::setFlash(' berhasil','dihapus','success');
        header('Location: ' .BASEURL. '/pengguna');
        exit;
      } else {
        Flasher::setFlash('gagal','dihapus','danger');
        header('Location: ' .BASEURL. '/pengguna');
        exit;
      }
    }

    public function getubah()
    {
      echo json_encode($this->model('pengguna_model')->detail($_POST['idpengguna']));
    }

    public function ubah()
    {
      if($this->model('pengguna_model')->ubahPengguna($_POST) > 0 ) {
        Flasher::setFlash(' berhasil','diubah','success');
        header('Location: ' .BASEURL. '/pengguna');
        exit;
      } else {
        Flasher::setFlash(' gagal','diubah','danger');
        header('Location: ' .BASEURL. '/pengguna');
        exit;
      }
      
    }
  }
