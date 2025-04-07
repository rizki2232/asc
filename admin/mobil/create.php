<?php

require_once dirname(__DIR__, 2) . '/src/db/connection.php';
$db = new Database();
$conn = $db->conn;

$query = "SELECT * FROM brands";
$result = $conn->query($query);

?>

<?php include __DIR__ . "/../../views/components/admin-header.php" ?>

<main class="main mx-auto h-full w-full px-4 md:px-6 lg:px-8 max-w-7xl bg-white shadow">
    <section class="flex flex-col gap-y-8 py-8">
        <header class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
            <div>
                <h1 class="text-2xl font-bold tracking-tight text-gray-950 dark:text-white sm:text-3xl">
                    Tambah mobil
                </h1>
            </div>
        </header>
        <div class="">
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="space-y-4">
                <div>
                    <label for="id_brands" class="block text-sm font-medium text-gray-700">Merek Mobil</label>
                    <select id="id_brands" name="id_brands" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                        <option value="" disabled selected>Pilih Merek Mobil</option>
                        <?php
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<option value='" . $row['id_brands'] . "'>" . $row['name'] . "</option>";
                            }
                        } else {
                            echo "<option value='' disabled>Tidak ada data</option>";
                        }
                        ?>
                    </select>
                </div>

                <div>
                    <label for="type" class="block text-sm font-medium text-gray-700">Jenis Mobil</label>
                    <input type="text" id="type" name="type" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                </div>
                <div>
                    <label for="color" class="block text-sm font-medium text-gray-700">Warna</label>
                    <input type="text" id="color" name="color" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                </div>
                <div>
                    <label for="date" class="block text-sm font-medium text-gray-700">Tanggal</label>
                    <input type="date" id="date" name="date" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                </div>
                <div>
                    <label for="year" class="block text-sm font-medium text-gray-700">Tahun Mobil</label>
                    <input type="number" id="year" name="year" required min="1900" max="<?php echo date('Y'); ?>" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                </div>
                <div>
                    <label for="quantity" class="block text-sm font-medium text-gray-700">Jumlah Mobil</label>
                    <input type="number" id="quantity" name="quantity" required min="1" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                </div>
                <button type="submit" class="w-full font-semibold bg-primary/90 text-white py-2 px-4 rounded-md hover:bg-primary cursor-pointer">Simpan</button>
            </form>
        </div>

        <?php
        require_once dirname(__DIR__, 2) . '/src/db/connection.php';
        $db = new Database();
        $conn = $db->conn;
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $id_brands = $_POST['id_brands'];  // Ambil ID merek yang dipilih
            $type = $_POST['type'];
            $color = $_POST['color'];
            $quantity = $_POST['quantity'];
            $year = $_POST['year'];
            $date = $_POST['date'];

            // Validasi jumlah agar tidak negatif
            if ($quantity < 1) {
                echo '<div class="mt-4 p-4 bg-red-100 border border-red-400 text-red-700 rounded-md">Jumlah mobil harus lebih dari 0</div>';
            } else {
                // Perbaiki query INSERT agar sesuai dengan database
                $sql = "INSERT INTO cars (id_cars, id_brands, type, color, quantity, year, date) 
                         VALUES (NULL, '$id_brands', '$type', '$color', '$quantity', '$year', '$date')";
                if ($conn->query($sql) === TRUE) {  
                    echo '<div class="mt-4 p-4 bg-green-100 border border-green-400 text-green-700 rounded-md">Data berhasil disimpan</div>';
                } else {
                    echo '<div class="mt-4 p-4 bg-red-100 border border-red-400 text-red-700 rounded-md">Error: ' . $conn->error . '</div>';
                }
            }
            $conn->close();
        }
        ?>
    </section>
</main>

<?php include __DIR__ . "/../../views/components/admin-footer.php" ?>