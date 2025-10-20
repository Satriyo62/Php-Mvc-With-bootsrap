<?php

class About extends Controller {
    public function index($nama = 'Satriyo Wicaksono Yunan Mubarok', $NIM = '244311027', $Prodi = 'TRPL'){
        $data['nama'] = $nama;
        $data['NIM'] = $NIM;
        $data['Prodi'] = $Prodi;

        $this->view('about/index', $data);
    }

}
