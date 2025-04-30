<?php

require_once dirname(__DIR__, 2) . '/src/db/connection.php';
$db = new Database();
$conn = $db->conn;

$id = $_GET['id_cars'];

// Ambil data mobil berdasarkan ID
$query = "SELECT * FROM cars WHERE id_cars = '$id'";
$result = $conn->query($query);
$data = $result->fetch_assoc();

// Ambil daftar merek mobil
$brandQuery = "SELECT * FROM brands";
$brandResult = $conn->query($brandQuery);

?>

<?php include __DIR__ . "/../../views/components/admin-header.php" ?>

<main class="main mx-auto h-full w-full px-4 md:px-6 lg:px-8 max-w-7xl bg-white shadow">
    <section class="flex flex-col gap-y-8 py-8">
        <header class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
            <div>
                <h1 class="text-2xl font-bold tracking-tight text-gray-950 dark:text-white sm:text-3xl">
                    Edit mobil
                </h1>
            </div>
        </header>
        <div class="">
            <form method="post" action="update.php" class="space-y-4">
                <input type="hidden" name="id_cars" value="<?= htmlspecialchars($data['id_cars']) ?>">

                <div>
                    <label for="id_brands" class="block text-sm font-medium text-gray-700">Merek Mobil</label>
                    <select id="id_brands" name="id_brands" required disabled class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm bg-gray-100 cursor-not-allowed focus:ring-blue-500 focus:border-blue-500">
                        <option value="" disabled>Pilih Merek Mobil</option>
                        <?php
                        while ($row = $brandResult->fetch_assoc()) {
                            $selected = ($row['id_brands'] == $data['id_brands']) ? "selected" : "";
                            echo "<option value='" . $row['id_brands'] . "' $selected>" . $row['name'] . "</option>";
                        }
                        ?>
                    </select>
                </div>


                <div>
                    <label for="type" class="block text-sm font-medium text-gray-700">Jenis Mobil</label>
                    <input type="text" id="type" name="type" value="<?= htmlspecialchars($data['type']) ?>" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm">
                </div>

                <div>
                    <label for="color" class="block text-sm font-medium text-gray-700">Warna</label>
                    <input type="text" id="color" name="color" value="<?= htmlspecialchars($data['color']) ?>" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm">
                </div>

                <div>
                    <label for="date" class="block text-sm font-medium text-gray-700">Tanggal</label>
                    <input type="date" id="date" name="date" value="<?= htmlspecialchars($data['date']) ?>" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm">
                </div>

                <div>
                    <label for="year" class="block text-sm font-medium text-gray-700">Tahun Mobil</label>
                    <input type="number" id="year" name="year" value="<?= htmlspecialchars($data['year']) ?>" required min="1900" max="<?php echo date('Y'); ?>" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm">
                </div>

                <div>
                    <label for="quantity" class="block text-sm font-medium text-gray-700">Jumlah Mobil</label>
                    <input type="number" id="quantity" name="quantity" value="<?= htmlspecialchars($data['quantity']) ?>" required min="1" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm">
                </div>

                <button type="submit" class="w-full font-semibold bg-primary/90 text-white py-2 px-4 rounded-md hover:bg-primary cursor-pointer">Perbarui</button>
            </form>
        </div>
    </section>
</main>

<?php include __DIR__ . "/../../views/components/admin-footer.php" ?>