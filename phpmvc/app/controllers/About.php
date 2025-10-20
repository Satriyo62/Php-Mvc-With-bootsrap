<?php

class About extends Controller {
    public function index($nama = 'Muhsyam Fahriel', $NIM = '244311021', $Prodi = 'TRPL'){
        $data['nama'] = $nama;
        $data['NIM'] = $NIM;
        $data['Prodi'] = $Prodi;

        $this->view('about/index', $data);
    }
}