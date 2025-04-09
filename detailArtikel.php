<?php
require_once 'src/db/connection.php';
$db = new Database();
$conn = $db->conn;

if (isset($_GET['id_posts'])) {
    $id = $_GET['id_posts'];

    // Query untuk memilih berita berdasarkan ID yang diterima
    $query = "SELECT * FROM posts WHERE id_posts = $id";
    $result = $conn->query($query);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT. ACS</title>
    <link rel="stylesheet" href="/src/css/app.css" />
    <script src="/src/js/alpine.js" defer></script>
</head>

<body>
    <?php include __DIR__ . "/views/components/header.php" ?>
    <main class="pt-22">
    </main>
    <section class="max-w-4xl mx-auto px-6 py-10 bg-white rounded shadow mt-8">
        <?php

if ($result->num_rows > 0) {

    $index = 1;
    while ($row = $result->fetch_assoc()) {
    ?>
                    <div class="space-y-4">
                        <img src='uploads/<?= $row['img'] ?>' class='w-full rounded-lg max-h-[400px] object-cover'>
                        <h2 class="text-2xl font-semibold text-gray-800"><?= $row["title"]; ?></h2>
                        <p class="text-gray-700"><?= $row["body"]; ?></p>

                    </div>
        <?php
                }
            } else {
                echo "<p class='text-center text-red-600'>Berita tidak ditemukan</p>";
            }
        } else {
            echo "<p class='text-center text-red-600'>ID berita tidak diterima</p>";
        }
        ?>
    </section>


    <?php include __DIR__ . "/views/components/footer.php" ?>
</body>

</html>