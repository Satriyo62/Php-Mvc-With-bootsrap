<div class="d-flex justify-content-between align-items-center mb-3">
  <h3><?= $data['judul']; ?></h3>
  <a href="<?= BASEURL; ?>/mahasiswa/tambah" class="btn btn-primary">Tambah Mahasiswa</a>
</div>

<table class="table table-striped">
  <thead class="table-dark">
    <tr>
      <th>No</th>
      <th>Nama</th>
      <th>NIM</th>
      <th>Prodi</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php $no = 1; foreach ($data['mhs'] as $mhs): ?>
    <tr>
      <td><?= $no++; ?></td>
      <td><?= htmlspecialchars($mhs['nama']); ?></td>
      <td><?= htmlspecialchars($mhs['nim']); ?></td>
      <td><?= htmlspecialchars($mhs['prodi']); ?></td>
      <td>
        <a href="<?= BASEURL; ?>mahasiswa/edit/<?= $mhs['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
        <a href="<?= BASEURL; ?>mahasiswa/hapus/<?= $mhs['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?');">Hapus</a>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>