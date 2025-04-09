<?php
require_once dirname(__DIR__, 2) . '/src/db/connection.php';
$db = new Database();
$conn = $db->conn;

if (isset($_GET['id_posts'])) {
    $id = $_GET['id_posts'];


    $query = "DELETE FROM posts WHERE id_posts = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        echo "<script>alert('Data mobil berhasil dihapus!'); window.location.href='/admin/artikel.php';</script>";
    } else {
        echo "<script>alert('Gagal menghapus data mobil!'); window.history.back();</script>";
    }

    $stmt->close();
}

$conn->close();
?>
