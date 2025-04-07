<?php
require_once 'src/db/connection.php';
$db = new Database();
$conn = $db->conn;

$query = "SELECT * FROM posts ORDER BY published_at DESC LIMIT 3";
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

    <div class="relative min-h-screen flex items-start bg-[url('../img/background.png')] bg-center bg-cover bg-no-repeat md:items-center overflow-hidden">
        <div class="container mx-auto flex flex-col md:flex-row items-start md:items-center justify-between w-10/12 px-4 pt-24 relative">
            <div class="text-left text-white">
                <h1 class="text-5xl font-bold leading-tight">Delivering Trust,</h1>
                <h1 class="text-5xl font-bold leading-tight">
                    <span class="text-yellow-400">Connecting</span> the Future
                </h1>
            </div>
        </div>
        <img src="src/img/mobil.png" alt="Mobil" class="absolute bottom-0 right-0 w-auto h-1/2 md:h-2/3 md:max-w-[80%] max-h-3/4 -mr-6 object-cover object-left-top">

        <!-- Ombak di Bagian Bawah -->
        <div class="absolute bottom-0 left-0 w-full">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#FFFFFF" fill-opacity="1" d="M0,288L80,266.7C160,245,320,203,480,208C640,213,800,267,960,277.3C1120,288,1280,256,1360,240L1440,224L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path>
            </svg>
        </div>
    </div>

    <section class="container px-8 py-10 lg:py-14 mx-auto">
        <div class="text-center text-3xl font-extrabold mb-6">
            Artikel Terbaru
        </div>
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php while ($row = $result->fetch_assoc()): ?>
                <a href="post.php?id=<?= $row['id_posts'] ?>">
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