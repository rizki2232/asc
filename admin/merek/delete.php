<?php
require_once("../koneksi.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Query untuk menghapus data mobil berdasarkan id
    $query = "DELETE FROM brands WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        echo "<script>alert('Data merek berhasil dihapus!'); window.location.href='/admin/merek';</script>";
    } else {
        echo "<script>alert('Gagal menghapus data merek!'); window.history.back();</script>";
    }

    $stmt->close();
}

$conn->close();
?>
