<?php

class Dashboard extends Controller {
    public function index()
    {
        $data['judul'] = 'Dashboard';
        $data['nama'] = $this->model('hakakses_model')->getHakAkses();
        $data['analytic'] = $this->model('dashboard_model')->getAnalytic();
     
        $this->view('template/header', $data);
        $this->view('dashboard/index', $data);
        $this->view('template/footer');
    }
    
}