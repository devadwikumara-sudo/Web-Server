<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h2>Data Mahasiswa</h2>
        <p class="text-muted">
            Daftar mahasiswa Semester 3
        </p>
    </div>

    <button class="btn btn-primary">
        + Tambah Mahasiswa
    </button>
</div>

<div class="card shadow-sm">

    <div class="card-header bg-primary text-white">
        <strong>Daftar Mahasiswa</strong>
    </div>

    <div class="card-body">

        <div class="table-responsive">

            <table class="table table-bordered table-striped align-middle">

                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Prodi</th>
                        <th>Angkatan</th>
                    </tr>
                </thead>

                <tbody>

                    <?php foreach ($mahasiswa as $index => $mhs): ?>

                        <tr>
                            <td><?= $index + 1 ?></td>
                            <td><?= htmlspecialchars($mhs->getNim()) ?></td>
                            <td><?= htmlspecialchars($mhs->getNama()) ?></td>
                            <td><?= htmlspecialchars($mhs->getProdi()) ?></td>
                            <td>
                                <span class="badge bg-success">
                                    <?= htmlspecialchars($mhs->getAngkatan()) ?>
                                </span>
                            </td>
                        </tr>

                    <?php endforeach; ?>

                </tbody>

            </table>

        </div>

    </div>

</div>