<?php
include '../koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_mobil = $_POST['id_mobil'];
    $id_merek = $_POST['id_merek'];
    $jenis = $_POST['jenis'];
    $warna = $_POST['warna'];
    $tanggal = $_POST['tanggal'];
    $tahun = $_POST['tahun'];
    $jumlah = $_POST['jumlah'];

    // Gunakan prepared statement untuk mencegah SQL injection
    $sql = "UPDATE data_mobil SET jenis=?, warna=?, tanggal=?, tahun=?, jumlah=? WHERE id_mobil=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssiii", $jenis, $warna, $tanggal, $tahun, $jumlah, $id_mobil);
    
    if ($stmt->execute()) {
        echo "<script>alert('Data mobil berhasil diperbarui!'); window.location.href='/acs/admin/mobil.php';</script>";
    
    
    
    } else {
        echo "<script>alert('Gagal memperbarui data!'); window.history.back();</script>";
    }

    $stmt->close();
    $conn->close();
}
?>
