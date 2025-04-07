<?php
require_once dirname(__DIR__, 2) . '/src/db/connection.php';
$db = new Database();
$conn = $db->conn;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id_cars'];
    $id_brands = $_POST['id_brands'];
    $type = $_POST['type'];
    $color = $_POST['color'];
    $date = $_POST['date'];
    $year = $_POST['year'];
    $quantity = $_POST['quantity'];

    $sql = "UPDATE cars SET id_brands=?, type=?, color=?, date=?, year=?, quantity=? WHERE id_cars=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("isssiii", $id_brands, $type, $color, $date, $year, $quantity, $id);
    
    if ($stmt->execute()) {
        echo "<script>alert('Data mobil berhasil diperbarui!'); window.location.href='/admin/cars.php';</script>";
    } else {
        echo "<script>alert('Gagal memperbarui data!'); window.history.back();</script>";
    }

    $stmt->close();
}
