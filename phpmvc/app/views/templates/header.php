<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $data['judul']; ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    html, body {
      height: 100%;
    }

    body {
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }

    main {
      flex: 1;
    }
  </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand fw-bold" href="<?= BASEURL; ?>">Data Mahasiswa</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link <?= ($data['judul'] == 'Home') ? 'active' : ''; ?>" href="<?= BASEURL; ?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= ($data['judul'] == 'Data Mahasiswa') ? 'active' : ''; ?>" href="<?= BASEURL; ?>mahasiswa">Mahasiswa</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<main class="container my-4">