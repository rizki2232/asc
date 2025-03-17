<?php
require_once dirname(__DIR__, 2) . '/src/db/connection.php';
$db = new Database();
$conn = $db->conn;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $body = $_POST['body'];
    $published_at = $_POST['date'];

    $sql = "UPDATE posts SET title=?, body=?, published_at=? WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssi", $title, $body, $published_at, $id);
    
    if ($stmt->execute()) {
        echo "<script>alert('Post berhasil diperbarui!'); window.location.href='/admin/post/index.php';</script>";
    } else {
        echo "<script>alert('Gagal memperbarui post!'); window.history.back();</script>";
    }

    $stmt->close();
}
?>

