<?php
class HomeController
{
    public function dashboard(): void
    {
        require __DIR__ . '/../Views/dashboard.php';
    }

    public function mahasiswa(): void
    {
        echo '<h1>Halaman Mahasiswa</h1>';
        echo '<p>Halaman ini terlindungi middleware.</p>';
    }
}
