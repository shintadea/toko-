<?php

class HakAkses extends Controller {
    public function index()
    {
      $data['judul'] = 'Data HakAkses';
      $data['hakakses'] = $this->model('hakakses_model')->getAllHakAkses();
      $this->view('template/header', $data);
      $this->view('hakakses/index', $data);
      $this->view('template/footer');
    }

    public function detail($IdAkses)
    {
      $data['judul'] = 'Detail HakAkses';
      $data['hakakses'] = $this->model('hakakses_model')->detail($IdAkses);
      $this->view('template/header', $data);
      $this->view('hakakses/detail', $data);
      $this->view('template/footer');
    }

    public function tambah()
    {
      if($this->model('hakakses_model')->tambahHakAkses($_POST) > 0 ) {
        Flasher::setFlash(' berhasil','ditambahkan','success');
        header('Location: ' .BASEURL. '/hakakses');
        exit;
      } else {
        Flasher::setFlash('gagal','ditambahkan','danger');
        header('Location: ' .BASEURL. '/hakakses');
        exit;
      }
    }

    public function hapus($IdAkses)
    {
      if($this->model('hakakses_model')->hapusHakAkses($IdAkses) > 0 ) {
        Flasher::setFlash(' berhasil','dihapus','success');
        header('Location: ' .BASEURL. '/hakakses');
        exit;
      } else {
        Flasher::setFlash('gagal','dihapus','danger');
        header('Location: ' .BASEURL. '/hakakses');
        exit;
      }
    }

    public function getubah()
    {
      echo json_encode($this->model('hakakses_model')->detail($_POST['idakses']));
    }

    public function ubah()
    {
      if($this->model('hakakses_model')->ubahHakAkses($_POST) > 0 ) {
        Flasher::setFlash(' berhasil','diubah','success');
        header('Location: ' .BASEURL. '/hakakses');
        exit;
      } else {
        Flasher::setFlash(' gagal','diubah','danger');
        header('Location: ' .BASEURL. '/hakakses');
        exit;
      }
      
    }
  }
