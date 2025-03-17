<?php
require_once dirname(__DIR__, 2) . '/src/db/connection.php';
$db = new Database();
$conn = $db->conn;

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Query untuk menghapus data mobil berdasarkan id
    $query = "DELETE FROM cars WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        echo "<script>alert('Data mobil berhasil dihapus!'); window.location.href='/acs/admin/merek';</script>";
    } else {
        echo "<script>alert('Gagal menghapus data mobil!'); window.history.back();</script>";
    }

    $stmt->close();
}

$conn->close();
?>
