<?php
$nama = "Deva Dwi Kumara";
$nim = "E41251656";
$waktu = date("Y-m-d H:i:s");
$php = phpversion();
$os = PHP_OS;
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Informasi Server ACARA 1</title>

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
            box-shadow: 0 5px 15px rgba(0,0,0,.1);
        }

        h1 {
            color: #1a2f58;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        td {
            padding: 12px;
            border: 1px solid #ddd;
        }

        td:first-child {
            font-weight: bold;
            width: 35%;
        }
    </style>
</head>

<body>

<div class="container">

    <h1>Informasi Server</h1>

    <table>
        <tr>
            <td>Nama</td>
            <td><?= htmlspecialchars($nama) ?></td>
        </tr>

        <tr>
            <td>NIM</td>
            <td><?= htmlspecialchars($nim) ?></td>
        </tr>

        <tr>
            <td>Waktu Server</td>
            <td><?= $waktu ?></td>
        </tr>

        <tr>
            <td>Versi PHP</td>
            <td><?= $php ?></td>
        </tr>

        <tr>
            <td>Sistem Operasi</td>
            <td><?= htmlspecialchars($os) ?></td>
        </tr>
    </table>

</div>

</body>
</html>

//tugas acara 1//