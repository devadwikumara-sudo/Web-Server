<?php
if (session_status() === PHP_SESSION_NONE) session_start();
$flash = $_SESSION['flash'] ?? null;
unset($_SESSION['flash']);
?>
<!DOCTYPE html>
<html lang="id">
<head><meta charset="UTF-8"><title>Dashboard</title></head>
<body>
<h1>Dashboard</h1>
<?php if ($flash): ?>
<p><?= htmlspecialchars($flash['message']) ?></p>
<?php endif; ?>
<p>Halo, <?= htmlspecialchars($_SESSION['user_name'] ?? 'User') ?></p>
<p><a href="/acara6/public/mahasiswa">Mahasiswa</a></p>
<p><a href="/acara6/public/logout">Logout</a></p>
</body>
</html>
