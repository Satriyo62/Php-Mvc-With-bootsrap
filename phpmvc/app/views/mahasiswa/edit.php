<h3>Edit Data Mahasiswa</h3>
<form action="<?= BASEURL; ?>mahasiswa/update" method="post">
  <input type="hidden" name="id" value="<?= $data['mhs']['id']; ?>">
  <div class="mb-3">
    <label>Nama</label>
    <input type="text" name="nama" class="form-control" value="<?= $data['mhs']['nama']; ?>" required>
  </div>
  <div class="mb-3">
    <label>NIM</label>
    <input type="text" name="nim" class="form-control" value="<?= $data['mhs']['nim']; ?>" required>
  </div>
  <div class="mb-3">
    <label>Prodi</label>
    <input type="text" name="prodi" class="form-control" value="<?= $data['mhs']['prodi']; ?>" required>
  </div>
  <button type="submit" class="btn btn-warning">Simpan</button>
  <a href="<?= BASEURL; ?>mahasiswa" class="btn btn-secondary">Batal</a>
</form>