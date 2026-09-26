<?php

$hasilGet = null;
$hasilPost = null;

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $hasilGet = $_GET['nama'] ?? null;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $hasilPost = $_POST['nama'] ?? null;
}

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>HTTP GET POST acara 2</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f5f5f5;
            padding: 30px;
        }

        .container {
            max-width: 700px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
        }

        input,
        button {
            padding: 10px;
            margin-top: 5px;
        }

        .form-group {
            margin-bottom: 20px;
        }
    </style>
</head>

<body>

<div class="container">

    <h1>Pengujian HTTP GET dan POST</h1>

    <h2>GET</h2>

    <form method="GET">

        <div class="form-group">

            <label>Nama</label>

            <br>

            <input
                type="text"
                name="nama"
                placeholder="Masukkan nama"
            >

        </div>

        <button type="submit">
            Kirim GET
        </button>

    </form>

    <?php if ($hasilGet !== null): ?>

        <p>
            Hasil GET:
            <strong>
                <?= htmlspecialchars($hasilGet) ?>
            </strong>
        </p>

    <?php endif; ?>


    <hr>


    <h2>POST</h2>

    <form method="POST">

        <div class="form-group">

            <label>Nama</label>

            <br>

            <input
                type="text"
                name="nama"
                placeholder="Masukkan nama"
            >

        </div>

        <button type="submit">
            Kirim POST
        </button>

    </form>

    <?php if ($hasilPost !== null): ?>

        <p>
            Hasil POST:
            <strong>
                <?= htmlspecialchars($hasilPost) ?>
            </strong>
        </p>

    <?php endif; ?>

</div>

</body>
</html>