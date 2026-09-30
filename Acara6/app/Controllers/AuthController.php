<?php
class AuthController
{
    public function loginForm(): void
    {
        require __DIR__ . '/../Views/auth/login.php';
    }

    public function login(): void
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        $username = $_POST['username'] ?? '';
        $password = $_POST['password'] ?? '';

        // Simulasi hardcode sesuai BKPM.
        if ($username === 'admin' && $password === 'admin123') {
            $_SESSION['logged_in'] = true;
            $_SESSION['user_name'] = 'Admin';
            $_SESSION['flash'] = [
                'type' => 'success',
                'message' => 'Selamat datang, Admin'
            ];
            header('Location: /acara6/public/dashboard');
            exit;
        }

        $_SESSION['flash'] = [
            'type' => 'danger',
            'message' => 'Username atau password salah'
        ];
        header('Location: /acara6/public/login');
        exit;
    }

    public function logout(): void
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        session_destroy();
        session_start();
        $_SESSION['flash'] = [
            'type' => 'success',
            'message' => 'Anda telah logout'
        ];

        header('Location: /acara6/public/login');
        exit;
    }
}
