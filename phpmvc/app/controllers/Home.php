<?php

class Home extends Controller {
    public function index() {
        $data['judul'] = 'Halaman Home';
        $data['nama'] = 'Selamat Datang di Website Saya';
        $this->view('home/index', $data);
    }
}