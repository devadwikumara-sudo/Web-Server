<?php
if (session_status() === PHP_SESSION_NONE) session_start();
$flash = $_SESSION['flash'] ?? null;
unset($_SESSION['flash']);
?>
<!DOCTYPE html>
<html lang="id">
<head><meta charset="UTF-8"><title>Login</title></head>
<body>
<h1>Login</h1>
<?php if ($flash): ?>
    <p><?= htmlspecialchars($flash['message']) ?></p>
<?php endif; ?>
<form method="POST" action="/acara6/public/login">
    <label>Username</label>
    <input name="username" required>
    <br><br>
    <label>Password</label>
    <input type="password" name="password" required>
    <br><br>
    <button>Login</button>
</form>
<p>Demo: admin / admin123</p>
</body>
</html>
