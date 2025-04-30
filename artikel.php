<?php
require_once 'src/db/connection.php';
$db = new Database();
$conn = $db->conn;

$query = "SELECT * FROM posts ORDER BY id_posts DESC LIMIT 9";
$result = $conn->query($query);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT. ACS</title>
    <link rel="stylesheet" href="src/css/app.css" />
    <script src="src/js/alpine.js" defer></script>
</head>

<body>
    <?php include __DIR__ . "/views/components/header.php" ?>
    <main class="pt-24">
        <h1 class="text-center text-3xl font-extrabold mb-6">Berita</h1>
    </main>
    <section class="container px-8  lg:py-12 mx-auto">

        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php while ($row = $result->fetch_assoc()): ?>
                <a href="detailArtikel.php?id_posts=<?= $row['id_posts'] ?>">
                    <div class="group flex flex-col h-full bg-white border border-gray-200 shadow-2xs rounded-xl dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70">
                        <div class="h-52 w-full bg-cover bg-center rounded-t-xl" style="background-image: url('uploads/<?= htmlspecialchars($row['img']) ?>');"></div>

                        <div class="p-4 md:p-6">
                            <span class="block mb-1 text-xs font-semibold uppercase text-gray-600 dark:text-gray-500">
                                <?= date('d-m-Y', strtotime($row['published_at'])) ?>
                            </span>
                            <h3 class="text-xl font-semibold text-gray-800 dark:text-neutral-300 dark:hover:text-white">
                                <?= htmlspecialchars($row['title']) ?>
                            </h3>
                            <p class="mt-3 text-gray-500 dark:text-neutral-500 line-clamp-2">
                                <?= htmlspecialchars_decode(strip_tags($row['body'])) ?>
                            </p>
                        </div>
                    </div>
                </a>
            <?php endwhile; ?>
        </div>
    </section>



    <?php include __DIR__ . "/views/components/footer.php" ?>
</body>

</html>