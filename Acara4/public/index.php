<?php

require_once __DIR__ . '/../app/Models/Mahasiswa.php';

use App\Models\Mahasiswa;

$mahasiswa = [
    new Mahasiswa("2501001", "Aji", "Teknik Informatika"),
    new Mahasiswa("2501002", "Ahmad", "Teknik Informatika"),
    new Mahasiswa("2501003", "Der", "Teknik Informatika"),
    new Mahasiswa("2467899", "budi", "Teknik Komputer")
];

$content = __DIR__ . '/../app/Views/mahasiswa/index.php';

require __DIR__ . '/../app/Views/layouts/main.php';