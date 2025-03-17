<?php

require_once dirname(__DIR__, 2) . '/src/db/connection.php';
$db = new Database();
$conn = $db->conn;

$query = "SELECT 
        cars.id,
        brands.name AS brand_name,
        cars.type, 
        cars.color, 
        cars.year, 
        cars.date
        FROM cars 
        JOIN brands ON cars.brand_id = brands.id;";
$result = $conn->query($query);

$thead = ['No', 'Merek', 'Jenis', 'Warna', 'Tahun', 'Tanggal Masuk'];
$no = 1;

?>

<?php include __DIR__ . "/../../views/components/admin-header.php" ?>

<main class="main mx-auto h-full w-full px-4 md:px-6 lg:px-8 max-w-7xl bg-white shadow">
    <section class="flex flex-col gap-y-8 py-8">
        <header class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
            <div>
                <h1 class="text-2xl font-bold tracking-tight text-gray-950 dark:text-white sm:text-3xl">
                    Tambah merek
                </h1>
            </div>
        </header>
        <div class="">
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="space-y-4">
                <div>
                    <label for="brand" class="block text-sm font-medium text-gray-700">Merek Mobil</label>
                    <input type="text" id="brand" name="brand" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                </div>
                <button type="submit" class="w-full font-semibold bg-primary/90 text-white py-2 px-4 rounded-md hover:bg-primary cursor-pointer">Simpan</button>
            </form>

            <?php
            require_once dirname(__DIR__, 2) . '/src/db/connection.php';
            $db = new Database();
            $conn = $db->conn;
            
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $data = $_POST['brand'];

                $sql = "INSERT INTO brands (name) VALUES ('$data')";
                if ($conn->query($sql) === TRUE) {
                    echo '<div class="mt-4 p-4 bg-green-100 border border-green-400 text-green-700 rounded-md">Data berhasil disimpan</div>';
                } else {
                    echo '<div class="mt-4 p-4 bg-red-100 border border-red-400 text-red-700 rounded-md">Error: ' . $sql . '<br>' . $conn->error . '</div>';
                }
                $conn->close();
            }
            ?>
        </div>
    </section>
</main>

<?php include __DIR__ . "/../../views/components/admin-footer.php" ?>