<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Edit Data Mobil</title>
</head>

<body class="bg-gray-100">
    <div class="flex">
        <?php
        include '../koneksi.php';

        // Ambil ID mobil dari URL
        if (isset($_GET['id_mobil'])) {
            $id_mobil = $_GET['id_mobil'];

            // Ambil data mobil berdasarkan id_mobil
            $query = "SELECT data_mobil.*, merek_mobil.merek 
            FROM data_mobil 
            JOIN merek_mobil ON data_mobil.id_merek = merek_mobil.id_merek 
            WHERE data_mobil.id_mobil = '$id_mobil'";

            $result = $conn->query($query);

            if ($result->num_rows == 1) {
                $data = $result->fetch_assoc();
            } else {
                echo "Data tidak ditemukan!";
                exit();
            }
        } else {
            echo "ID mobil tidak diberikan!";
            exit();
        }

        // Ambil data merek dari tabel merek_mobil
        $query_merek = "SELECT id_merek, merek FROM merek_mobil";
        $result_merek = $conn->query($query_merek);
        ?>

        <!DOCTYPE html>
        <html lang="id">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <script src="https://cdn.tailwindcss.com"></script>
            <title>Edit Data Mobil</title>
        </head>

        <body class="bg-gray-100">
            <div class="flex">
                <?php include '../navbar.php'; ?>
                <div class="p-6 w-full">
                    <div class="bg-white p-6 rounded-lg shadow mx-auto">
                        <h2 class="text-2xl font-semibold mb-4">Edit Data Mobil</h2>

                        <form method="post" action="updateMobil.php" class="space-y-4">
                            <input type="hidden" name="id_mobil" value="<?php echo $data['id_mobil']; ?>">

                            <div>
                                <label for="merek" class="block text-sm font-medium text-gray-700">Merek Mobil</label>
                                <input type="text" id="merek" value="<?php echo $data['merek']; ?>" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm bg-gray-200" readonly>
                                <input type="hidden" name="id_merek" value="<?php echo $data['id_merek']; ?>">
                            </div>


                            <div>
                                <label for="jenis" class="block text-sm font-medium text-gray-700">Jenis Mobil</label>
                                <input type="text" id="jenis" name="jenis" value="<?php echo $data['jenis']; ?>" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm">
                            </div>

                            <div>
                                <label for="warna" class="block text-sm font-medium text-gray-700">Warna</label>
                                <input type="text" id="warna" name="warna" value="<?php echo $data['warna']; ?>" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm">
                            </div>

                            <div>
                                <label for="tanggal" class="block text-sm font-medium text-gray-700">Tanggal</label>
                                <input type="date" id="tanggal" name="tanggal" value="<?php echo $data['tanggal']; ?>" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm">
                            </div>

                            <div>
                                <label for="tahun" class="block text-sm font-medium text-gray-700">Tahun Mobil</label>
                                <input type="number" id="tahun" name="tahun" value="<?php echo $data['tahun']; ?>" required min="1900" max="<?php echo date('Y'); ?>" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm">
                            </div>

                            <div>
                                <label for="jumlah" class="block text-sm font-medium text-gray-700">Jumlah Mobil</label>
                                <input type="number" id="jumlah" name="jumlah" value="<?php echo $data['jumlah']; ?>" required min="1" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm">
                            </div>

                            <button type="submit" class="w-full bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </body>

        </html>