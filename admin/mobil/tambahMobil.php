<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Dashboard Tambah Mobil</title>
</head>

<body class="bg-gray-100">
    <div class="flex">
        <?php include '../navbar.php'; ?>
        <div class="p-6 w-full">
            <div class="bg-white p-6 rounded-lg shadow mx-auto">
                <h2 class="text-2xl font-semibold mb-4">Formulir Tambah Mobil</h2>

                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="space-y-4">
                    <?php
                    include '../koneksi.php';

                    // Ambil data merek dari tabel merek_mobil
                    $query_merek = "SELECT id_merek, merek FROM merek_mobil";
                    $result_merek = $conn->query($query_merek);
                    ?>

                    <div>
                        <label for="merek" class="block text-sm font-medium text-gray-700">Merek Mobil</label>
                        <select id="merek" name="merek" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                            <option value="" disabled selected>Pilih Merek Mobil</option>
                            <?php
                            if ($result_merek->num_rows > 0) {
                                while ($row = $result_merek->fetch_assoc()) {
                                    echo "<option value='" . $row['id_merek'] . "'>" . $row['merek'] . "</option>";
                                }
                            } else {
                                echo "<option value='' disabled>Tidak ada data</option>";
                            }
                            ?>
                        </select>
                    </div>

                    <div>
                        <label for="jenis" class="block text-sm font-medium text-gray-700">Jenis Mobil</label>
                        <input type="text" id="jenis" name="jenis" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    <div>
                        <label for="warna" class="block text-sm font-medium text-gray-700">Warna</label>
                        <input type="text" id="warna" name="warna" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    <div>
                        <label for="tanggal" class="block text-sm font-medium text-gray-700">Tanggal</label>
                        <input type="date" id="tanggal" name="tanggal" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    <div>
                        <label for="tahun" class="block text-sm font-medium text-gray-700">Tahun Mobil</label>
                        <input type="number" id="tahun" name="tahun" required min="1900" max="<?php echo date('Y'); ?>" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    <div>
                        <label for="jumlah" class="block text-sm font-medium text-gray-700">Jumlah Mobil</label>
                        <input type="number" id="jumlah" name="jumlah" required min="1" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    <button type="submit" class="w-full bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600">Simpan</button>
                </form>

                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $merek_id = $_POST['merek'];  // Ambil ID merek yang dipilih
                    $jenis = $_POST['jenis'];
                    $warna = $_POST['warna'];
                    $jumlah = $_POST['jumlah'];
                    $tahun = $_POST['tahun'];
                    $tanggal = $_POST['tanggal'];

                    // Validasi jumlah agar tidak negatif
                    if ($jumlah < 1) {
                        echo '<div class="mt-4 p-4 bg-red-100 border border-red-400 text-red-700 rounded-md">Jumlah mobil harus lebih dari 0</div>';
                    } else {
                        // Perbaiki query INSERT agar sesuai dengan database
                        $sql = "INSERT INTO data_mobil (id_mobil, id_merek, jenis, warna, jumlah, tahun, tanggal) 
                         VALUES (NULL, '$merek_id', '$jenis', '$warna', '$jumlah', '$tahun', '$tanggal')";
                        if ($conn->query($sql) === TRUE) {
                            echo '<div class="mt-4 p-4 bg-green-100 border border-green-400 text-green-700 rounded-md">Data berhasil disimpan</div>';
                        } else {
                            echo '<div class="mt-4 p-4 bg-red-100 border border-red-400 text-red-700 rounded-md">Error: ' . $conn->error . '</div>';
                        }
                    }
                    $conn->close();
                }
                ?>
            </div>
        </div>
    </div>
</body>

</html>