<?php

class Mahasiswa extends Controller {
    public function index() {
        $data['judul'] = 'Data Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->getAllMahasiswa();
        $this->view('templates/header', $data);
        $this->view('mahasiswa/index', $data);
        $this->view('templates/footer');
    }

    public function tambah() {
        $data['judul'] = 'Tambah Data Mahasiswa';
        $this->view('templates/header', $data);
        $this->view('mahasiswa/tambah');
        $this->view('templates/footer');
    }

    public function simpan() {
        if ($this->model('Mahasiswa_model')->tambahDataMahasiswa($_POST) > 0) {
            header('Location: ' . BASEURL . 'mahasiswa');
            exit;
        }
    }

    public function hapus($id) {
        if ($this->model('Mahasiswa_model')->hapusDataMahasiswa($id) > 0) {
            header('Location: ' . BASEURL . 'mahasiswa');
            exit;
        }
    }

    public function edit($id) {
        $data['judul'] = 'Edit Data Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->getMahasiswaById($id);
        $this->view('templates/header', $data);
        $this->view('mahasiswa/edit', $data);
        $this->view('templates/footer');
    }

    public function update() {
        if ($this->model('Mahasiswa_model')->ubahDataMahasiswa($_POST) > 0) {
            header('Location: ' . BASEURL . 'mahasiswa');
            exit;
        }
    }
}