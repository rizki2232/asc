<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Romanesco&display=swap" rel="stylesheet">
    <title>Dashboard</title>
</head>

<body class="bg-gray-100">
    <!-- SIDEBAR -->
    <div class="w-64 bg-blue-600 min-h-screen p-5 text-white">
        <a href="dashboardAdmin.php" class="block text-center text-xl font-semibold pb-5">ACS</a>
        <ul>
            <li>
                <a href="dashboardAdmin.php" class="block py-2 px-4 rounded hover:bg-blue-500">
                    <?php $url = $_SERVER['REQUEST_URI'];
                    $active = (basename($url) === 'dasboardAdmin.php') ? 'font-bold' : ''; ?>
                    <span class="<?php echo $active; ?>">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="mobil.php" class="block py-2 px-4 rounded hover:bg-blue-500">
                    <?php $active = (basename($url) === 'mobil.php') ? 'font-bold' : ''; ?>
                    <span class="<?php echo $active; ?>">Mobil</span>
                </a>
            </li>
            <li>
                <a href="mobilMasuk.php" class="block py-2 px-4 rounded hover:bg-blue-500">
                    <?php $active = (basename($url) === 'mobilMasuk.php') ? 'font-bold' : ''; ?>
                    <span class="<?php echo $active; ?>">Mobil Masuk</span>
                </a>
            </li>
            <li>
                <a href="mobilKeluar.php" class="block py-2 px-4 rounded hover:bg-blue-500">
                    <?php $active = (basename($url) === 'mobilKeluar.php') ? 'font-bold' : ''; ?>
                    <span class="<?php echo $active; ?>">Mobil Keluar</span>
                </a>
            </li>
            <li>
                <a href="/tasemester%203/admin/datapenduduk.php" class="block py-2 px-4 rounded hover:bg-blue-500">
                    <?php $active = (basename($url) === 'datapenduduk.php') ? 'font-bold' : ''; ?>
                    <span class="<?php echo $active; ?>">Data Penduduk</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- SIDEBAR END -->
</body>

</html>