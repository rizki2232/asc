<?php
require_once("../koneksi.php");

if (isset($_GET['id'])) {
    $id_mobil = $_GET['id'];

    // Query untuk menghapus data mobil berdasarkan id
    $query = "DELETE FROM data_mobil WHERE id_mobil = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $id_mobil);

    if ($stmt->execute()) {
        echo "<script>alert('Data mobil berhasil dihapus!'); window.location.href='/acs/admin/mobil.php';</script>";
    } else {
        echo "<script>alert('Gagal menghapus data mobil!'); window.history.back();</script>";
    }

    $stmt->close();
}

$conn->close();
?>
