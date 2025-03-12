<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Dashboard Admin</title>
</head>
<body class="bg-gray-100">
    <div class="flex">
        <?php include 'navbar.php'; ?>
        <div class="p-6 w-full">
           
            <div class="text-center my-6">
                <h1 class="text-3xl font-bold">Selamat Datang!</h1>
                <p class="text-lg text-gray-700">Di Dashboard Admin</p>
            </div>
            <div class="grid grid-cols-3 gap-6 mx-auto w-4/5">
                <div class="bg-white p-6 rounded-lg shadow">
                    <p class="text-2xl font-bold"></p>
                    <span class="text-gray-600">Total Mobil</span>
                </div>
                <div class="bg-white p-6 rounded-lg shadow">
                    <p class="text-2xl font-bold"></p>
                    <span class="text-gray-600">Total Mobil Masuk</span>
                </div>
                <div class="bg-white p-6 rounded-lg shadow">
                    <p class="text-2xl font-bold"></p>
                    <span class="text-gray-600">Total Mobil keluar</span>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
