<?php
require_once dirname(__DIR__, 2) . '/src/db/connection.php';
$db = new Database();
$conn = $db->conn;

if (isset($_GET['id_brands'])) {
    $id = $_GET['id_brands'];

    // Query untuk menghapus data mobil berdasarkan id
    $query = "DELETE FROM brands WHERE id_brands = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        echo "<script>alert('Data merek berhasil dihapus!'); window.location.href='/admin/brands.php';</script>";
    } else {
        echo "<script>alert('Gagal menghapus data merek!'); window.history.back();</script>";
    }

    $stmt->close();
}

$conn->close();
?>
