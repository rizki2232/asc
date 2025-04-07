<?php

require_once dirname(__DIR__, 2) . '/src/db/connection.php';
$db = new Database();
$conn = $db->conn;

if (!isset($_GET['id_brands'])) {
    die("ID merek tidak ditemukan.");
}

$id_brands = $conn->real_escape_string($_GET['id_brands']); // Hindari SQL Injection
$query = "SELECT * FROM brands WHERE id_brands = '$id_brands'";
$result = $conn->query($query);

if (!$result || $result->num_rows == 0) {
    die("Data merek tidak ditemukan.");
}

$brand = $result->fetch_assoc();


?>

<?php include __DIR__ . "/../../views/components/admin-header.php" ?>

<main class="main mx-auto h-full w-full px-4 md:px-6 lg:px-8 max-w-7xl bg-white shadow">
    <section class="flex flex-col gap-y-8 py-8">
        <header class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
            <div>
                <h1 class="text-2xl font-bold tracking-tight text-gray-950 dark:text-white sm:text-3xl">
                    Edit merek
                </h1>
            </div>
        </header>
        <div class="">
            <form method="post" action="update.php" class="space-y-4">
                <input type="hidden" name="id" value="<?= htmlspecialchars($data['id_brands']) ?>">
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Merek Mobil</label>
                    <input type="hidden" name="id_brands" value="<?= htmlspecialchars($brand['id_brands']) ?>">
                    <input type="text" id="name" name="name" value="<?= htmlspecialchars($brand['name']) ?>" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                </div>
                <button type="submit" class="w-full font-semibold bg-primary/90 text-white py-2 px-4 rounded-md hover:bg-primary cursor-pointer">Perbarui</button>
            </form>
        </div>
    </section>
</main>

<?php include __DIR__ . "/../../views/components/admin-footer.php" ?>