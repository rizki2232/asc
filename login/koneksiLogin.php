<?php
session_start();
require_once ("koneksi.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username= $_POST['username'];
        $password= $_POST['password'];
        $loginError='';

        $query = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
        $result = $conn->query($query);
        $url = $_SERVER['REQUEST_URI'];
        $parts = explode('/', $url);
        $new_url = '/admin';
        // echo $new_url;

        if ($result->num_rows == 1) {
            $_SESSION['username'] = $username;
            header("location: " . $new_url);
        } else {
            $loginError = "Login gagal. Cek username dan password.";
            header("Location: index.php?error=Incorect User name or password");
            exit();
        }
    }
}
?>