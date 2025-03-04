<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Data Dokter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a href="#" class="navbar-brand">My App</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a href="pasien.php" class="nav-link" aria-current="page">Pasien</a>
</li>
<li class="nav-item">
                            <a href="dokter.php" class="nav-link" aria-current="page">Dokter</a>
</li>
<li class="nav-item">
                            <a href="pasien 2.php" class="nav-link" aria-current="page">Kunjungan</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="row mt-3">
            <div class="col-sm">
                <h3>Manajemen data dokter</h3>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <a href="tambahdokter.php" class="btn btn-primary btn-sm d-flex justify-content-center">Tambah Data</a>
            </div>
        </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a href="pasien.php" class="nav-link" aria-current="page">Pasien</a>
                            <a href="dokter.php" class="nav-link" aria-current="page">Dokter</a>
                            <a href="Tabel Dokter/pasien.php" class="nav-link" aria-current="page">Kunjungan</a>
                        </li>
                    </ul>
                </div>
        </div>
        <table class="table table-striped mt-3">
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID Kunjungan</th>
                    <th>ID Pasien</th>
                    <th>ID Dokter</th>
                    <th>Tanggal</th>
                    <th>Keluhan</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'konek.php';
                $no = 1;
                $hasil = ambilDataDokter();
                
                while ($row = $hasil->fetch_assoc()) {
                    ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $row['idkunjungan']; ?></td>
                        <td><?= $row['idpasien']; ?></td>
                        <td><?= $row['iddokter']; ?></td>
                        <td><?= $row['tanggal']; ?></td>
                        <td><?= $row['keluhan']; ?></td>
                        <td>
                            <a href="editdokter.php?edit=<?= $row['idkunjungan']; ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="konek.php?idkunjungan=<?= $row['idkunjungan']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin menghapus data ini?')">Hapus</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>