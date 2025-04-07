<?php
require_once dirname(__DIR__, 2) . '/src/db/connection.php';
$db = new Database();
$conn = $db->conn;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id_brands'];
    $name = $_POST['name'];

    $sql = "UPDATE brands SET name=? WHERE id_brands=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("si", $name, $id);
    
    if ($stmt->execute()) {
        echo "<script>alert('Data mobil berhasil diperbarui!'); window.location.href='/admin/brands.php';</script>";
    } else {
        echo "<script>alert('Gagal memperbarui data!'); window.history.back();</script>";
    }

    $stmt->close();
    $conn->close();
}
?>
