<h3>Tambah Data Mahasiswa</h3>
<form action="<?= BASEURL; ?>mahasiswa/simpan" method="post">
  <div class="mb-3">
    <label>Nama</label>
    <input type="text" name="nama" class="form-control" required>
  </div>
  <div class="mb-3">
    <label>NIM</label>
    <input type="text" name="nim" class="form-control" required>
  </div>
  <div class="mb-3">
    <label>Prodi</label>
    <input type="text" name="prodi" class="form-control" required>
  </div>
  <button type="submit" class="btn btn-success">Simpan</button>
  <a href="<?= BASEURL; ?>mahasiswa" class="btn btn-secondary">Batal</a>
</form>