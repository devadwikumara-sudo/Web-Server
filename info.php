<?php
$nama = "Deva Dwi Kumara";
$nim = "E41251656";
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Informasi Server</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            padding: 40px;
        }

        .container {
            max-width: 700px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        }

        h1 {
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            padding: 12px;
            border: 1px solid #ddd;
        }

        th {
            text-align: left;
            background: #f1f1f1;
        }
    </style>
</head>

<body>

<div class="container">

    <h1>Informasi Server</h1>

    <table>

        <tr>
            <th>Nama</th>
            <td><?= htmlspecialchars($nama) ?></td>
        </tr>

        <tr>
            <th>NIM</th>
            <td><?= htmlspecialchars($nim) ?></td>
        </tr>

        <tr>
            <th>Waktu Server</th>
            <td><?= date("Y-m-d H:i:s") ?></td>
        </tr>

        <tr>
            <th>Versi PHP</th>
            <td><?= phpversion() ?></td>
        </tr>

        <tr>
            <th>Sistem Operasi Server</th>
            <td><?= PHP_OS ?></td>
        </tr>

    </table>

</div>

</body>
</html>