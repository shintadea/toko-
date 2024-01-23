<?php

class Supplier extends Controller {
    public function index()
    {
      $data['judul'] = 'Data Supplier';
      $data['supplier'] = $this->model('supplier_model')->getAllSupplier();
      $this->view('template/header', $data);
      $this->view('supplier/index', $data);
      $this->view('template/footer');
    }

    public function detail($IdSupplier)
    {
      $data['judul'] = 'Detail Supplier';
      $data['supplier'] = $this->model('supplier_model')->detail($IdSupplier);
      $this->view('template/header', $data);
      $this->view('supplier/detail', $data);
      $this->view('template/footer');
    }

    public function tambah()
    {
      if($this->model('supplier_model')->tambahSupplier($_POST) > 0 ) {
        Flasher::setFlash(' berhasil','ditambahkan','success');
        header('Location: ' .BASEURL. '/supplier');
        exit;
      } else {
        Flasher::setFlash('gagal','ditambahkan','danger');
        header('Location: ' .BASEURL. '/supplier');
        exit;
      }
    }

    public function hapus($IdSupplier)
    {
      if($this->model('supplier_model')->hapusSupplier($IdSupplier) > 0 ) {
        Flasher::setFlash(' berhasil','dihapus','success');
        header('Location: ' .BASEURL. '/supplier');
        exit;
      } else {
        Flasher::setFlash('gagal','dihapus','danger');
        header('Location: ' .BASEURL. '/supplier');
        exit;
      }
    }

    public function getubah()
    {
      echo json_encode($this->model('supplier_model')->detail($_POST['idsupplier']));
    }

    public function ubah()
    {
      if($this->model('supplier_model')->ubahSupplier($_POST) > 0 ) {
        Flasher::setFlash(' berhasil','diubah','success');
        header('Location: ' .BASEURL. '/supplier');
        exit;
      } else {
        Flasher::setFlash(' gagal','diubah','danger');
        header('Location: ' .BASEURL. '/supplier');
        exit;
      }
      
    }
  }
