<?php
require_once dirname(__DIR__, 2) . '/src/db/connection.php';
$db = new Database();
$conn = $db->conn;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $brand_id = $_POST['brand_id'];
    $type = $_POST['type'];
    $color = $_POST['color'];
    $date = $_POST['date'];
    $year = $_POST['year'];
    $quantity = $_POST['quantity'];

    $sql = "UPDATE cars SET brand_id=?, type=?, color=?, date=?, year=?, quantity=? WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("isssiii", $brand_id, $type, $color, $date, $year, $quantity, $id);
    
    if ($stmt->execute()) {
        echo "<script>alert('Data mobil berhasil diperbarui!'); window.location.href='/admin/mobil';</script>";
    } else {
        echo "<script>alert('Gagal memperbarui data!'); window.history.back();</script>";
    }

    $stmt->close();
}
