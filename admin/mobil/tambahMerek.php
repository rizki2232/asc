<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Dashboard Tambah  Merek</title>
</head>

<body class="bg-gray-100">
    <div class="flex">
        <?php include '../navbar.php'; ?>
        <div class="p-6 w-full">
            <div class="bg-white p-6 rounded-lg shadow  mx-auto">
                <h2 class="text-2xl font-semibold mb-4">Formulir Tambah Merek</h2>
                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="space-y-4">
                    <div>
                        <label for="merek" class="block text-sm font-medium text-gray-700">Merek Mobil</label>
                        <input type="text" id="merek" name="merek" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    <button type="submit" class="w-full bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600">Simpan</button>
                </form>

                <?php
                include '../koneksi.php';

                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $merek = $_POST['merek'];

                    $sql = "INSERT INTO merek_mobil (merek) VALUES ('$merek')";
                    if ($conn->query($sql) === TRUE) {
                        echo '<div class="mt-4 p-4 bg-green-100 border border-green-400 text-green-700 rounded-md">Data berhasil disimpan</div>';
                    } else {
                        echo '<div class="mt-4 p-4 bg-red-100 border border-red-400 text-red-700 rounded-md">Error: ' . $sql . '<br>' . $conn->error . '</div>';
                    }
                    $conn->close();
                }
                ?>
            </div>
        </div>
    </div>
</body>

</html>