<?php

require_once dirname(__DIR__, 1) . '/src/db/connection.php';
$db = new Database();
$conn = $db->conn;

$query = "SELECT * FROM posts ORDER BY published_at DESC";
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
    <?php include dirname(__DIR__, 1) . "/views/components/header.php" ?>

    <main class="min-h-screen overflow-x-hidden">
        <section class="h-64 flex items-center justify-center backdrop-opacity-25 bg-[url('https://images.unsplash.com/photo-1565891741441-64926e441838?q=80&w=1471&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')] bg-cover bg-center">
            <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-primary/80 to-secondary/80">
                <div class="mt-16 text-center text-3xl font-extrabold text-white">
                    Artikel
                </div>
            </div>
        </section>

        <section class="container mx-auto mt-4 px-6">
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <?php while ($row = $result->fetch_assoc()): ?>
                    <!-- Card -->
                    <a href="post.php?id=<?= $row['id'] ?>">
                        <div class="group flex flex-col h-full bg-white border border-gray-200 shadow-2xs rounded-xl dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70">
                            <div class="h-52 flex flex-col justify-center items-center bg-[url('../img/background.png')] bg-center bg-cover bg-no-repeat rounded-t-xl">

                            </div>
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
                    <!-- End Card -->
                <?php endwhile; ?>
            </div>
        </section>
    </main>

    <?php include dirname(__DIR__, 1) . "/views/components/footer.php" ?>
</body>

</html>