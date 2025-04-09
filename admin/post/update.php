<?php
require_once dirname(__DIR__, 2) . '/src/db/connection.php';
$db = new Database();
$conn = $db->conn;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id_posts'];
    $title = $_POST['title'];
    $body = $_POST['body'];
    $published_at = $_POST['date'];

    $gambar = $_FILES['gambar']['name'];
    $gambar_temp = $_FILES['gambar']['tmp_name'];
    $gambar_size = $_FILES['gambar']['size'];

    $folder_upload = "../../uploads/";
    $gambar_unik = uniqid() . '_' . basename($gambar);
    $path_gambar = $folder_upload . $gambar_unik;
    $ext = strtolower(pathinfo($gambar, PATHINFO_EXTENSION));
    $allowed_ext = ['jpg', 'jpeg', 'png'];

    // Jika pengguna mengunggah gambar baru
    if (!empty($gambar)) {
        if (!getimagesize($gambar_temp)) {
            $pesan_error = "File yang diunggah bukan gambar.";
        } elseif (!in_array($ext, $allowed_ext)) {
            $pesan_error = "Hanya file JPG, JPEG, dan PNG yang diizinkan.";
        } elseif ($gambar_size > 5242880) {
            $pesan_error = "Ukuran gambar maksimal 5MB.";
        } else {
            if (move_uploaded_file($gambar_temp, $path_gambar)) {
                try {
                    $stmt = $conn->prepare("UPDATE posts SET title=?, body=?, img=?, published_at=? WHERE id_posts=?");
                    $stmt->bind_param("ssssi", $title, $body, $gambar_unik, $published_at, $id);
                    $stmt->execute();

                    echo "<script>alert('Post berhasil diperbarui!'); window.location.href='/admin/artikel.php';</script>";
                } catch (Exception $e) {
                    echo "<script>alert('Error saat memperbarui: " . $e->getMessage() . "'); window.history.back();</script>";
                }
            } else {
                echo "<script>alert('Gagal mengunggah gambar.'); window.history.back();</script>";
            }
        }
    } else {
        // Tanpa update gambar
        try {
            $stmt = $conn->prepare("UPDATE posts SET title=?, body=?, published_at=? WHERE id_posts=?");
            $stmt->bind_param("sssi", $title, $body, $published_at, $id);
            $stmt->execute();

            echo "<script>alert('Post berhasil diperbarui tanpa mengubah gambar.'); window.location.href='/admin/artikel.php';</script>";
        } catch (Exception $e) {
            echo "<script>alert('Error saat memperbarui: " . $e->getMessage() . "'); window.history.back();</script>";
        }
    }
}
?>
