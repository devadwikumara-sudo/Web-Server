<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Tambah Mahasiswa</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

</head>

<body>

<div class="container mt-4">

    <h1>Tambah Mahasiswa</h1>

    <form method="POST">

        <div class="mb-3">

            <label class="form-label">
                NIM
            </label>

            <input
                type="text"
                name="nim"
                class="form-control"
            >

        </div>

        <div class="mb-3">

            <label class="form-label">
                Nama
            </label>

            <input
                type="text"
                name="nama"
                class="form-control"
            >

        </div>

        <div class="mb-3">

            <label class="form-label">
                Email
            </label>

            <input
                type="email"
                name="email"
                class="form-control"
            >

        </div>

        <button class="btn btn-primary">
            Simpan
        </button>

    </form>

</div>

</body>
</html>