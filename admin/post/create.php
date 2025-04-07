<?php
require_once dirname(__DIR__, 2) . '/src/db/connection.php';
$db = new Database();
$conn = $db->conn;

$pesan_sukses = "";
$pesan_error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $published_at = $_POST['date'];
    $body = $_POST['body'];

    // Gambar
    $gambar = $_FILES['gambar']['name'];
    $gambar_temp = $_FILES['gambar']['tmp_name'];
    $gambar_size = $_FILES['gambar']['size'];

    $folder_upload = "../../uploads/";
    $gambar_unik = uniqid() . '_' . basename($gambar);
    $path_gambar = $folder_upload . $gambar_unik;
    $ext = strtolower(pathinfo($gambar, PATHINFO_EXTENSION));
    $allowed_ext = ['jpg', 'jpeg', 'png'];

    // Validasi gambar
    if (!getimagesize($gambar_temp)) {
        $pesan_error = "File yang diunggah bukan gambar.";
    } elseif (!in_array($ext, $allowed_ext)) {
        $pesan_error = "Hanya file JPG, JPEG, dan PNG yang diizinkan.";
    } elseif ($gambar_size > 5242880) {
        $pesan_error = "Ukuran gambar maksimal 5MB.";
    } else {
        // Upload gambar
        if (move_uploaded_file($gambar_temp, $path_gambar)) {
            // Insert ke DB pakai prepared statement
            try {
                $stmt = $conn->prepare("INSERT INTO posts (title, body, img, published_at) VALUES (?, ?, ?, ?)");
                $stmt->bind_param("ssss", $title, $body, $gambar_unik, $published_at);
                $stmt->execute();

                $pesan_sukses = "Post berhasil disimpan.";
            } catch (Exception $e) {
                $pesan_error = "Error saat menyimpan: " . $e->getMessage();
            }
        } else {
            $pesan_error = "Gagal mengunggah gambar.";
        }
    }

    $conn->close();
}
?>

<?php include __DIR__ . "/../../views/components/admin-header.php" ?>

<main class="main mx-auto h-full w-full px-4 md:px-6 lg:px-8 max-w-7xl bg-white shadow">
    <section class="flex flex-col gap-y-8 py-8">
        <header class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
            <div>
                <h1 class="text-2xl font-bold tracking-tight text-gray-950 dark:text-white sm:text-3xl">
                    Tambah Post
                </h1>
            </div>
        </header>

        <!-- Notifikasi -->
        <?php if (!empty($pesan_sukses)) : ?>
            <div class="p-4 bg-green-100 border border-green-400 text-green-700 rounded-md"><?= $pesan_sukses ?></div>
        <?php elseif (!empty($pesan_error)) : ?>
            <div class="p-4 bg-red-100 border border-red-400 text-red-700 rounded-md"><?= $pesan_error ?></div>
        <?php endif; ?>

        <!-- Form -->
        <form method="post" enctype="multipart/form-data" action="<?= htmlspecialchars($_SERVER['PHP_SELF']); ?>" class="space-y-4">    
            <div>
                <label for="title" class="block text-sm font-medium text-gray-700">Judul</label>
                <input type="text" id="title" name="title" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
            </div>
            <div>
                <label for="date" class="block text-sm font-medium text-gray-700">Tanggal Diterbitkan</label>
                <input type="date" id="date" name="date" value="<?= date('Y-m-d'); ?>" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
            </div>
            <div>
                <label for="gambar" class="block text-sm font-medium text-gray-700">Gambar</label>
                <input
                    id="gambar"
                    type="file"
                    name="gambar"
                    accept="image/*"
                    required
                    class="mt-2 file:mr-4 file:rounded-full file:border-0 file:bg-blue-50 file:px-4 file:py-2 file:text-sm file:font-semibold file:text-blue-700 hover:file:bg-violet-100 dark:file:bg-violet-600 dark:file:text-violet-100 dark:hover:file:bg-violet-500 cursor-pointer" />
            </div>
            <div>
                <label for="editor" class="block mb-2 text-sm font-medium text-gray-700">Konten</label>
                <div id="editor" class="bg-white border border-gray-300 p-3 rounded-md">
                    <h2>Demo Content</h2>
                    <p>Preset build with <code>snow</code> theme, and some common formats.</p>
                </div>
                <input type="hidden" name="body" id="hiddenContent">
            </div>

            <script>
                const toolbarOptions = [
                    ['bold', 'italic', 'underline', 'strike'],
                    ['blockquote', 'code-block'],
                    ['link'],
                    [{ 'header': 1 }, { 'header': 2 }],
                    [{ 'list': 'ordered' }, { 'list': 'bullet' }, { 'list': 'check' }],
                    [{ 'script': 'sub' }, { 'script': 'super' }],
                    [{ 'indent': '-1' }, { 'indent': '+1' }],
                    [{ 'direction': 'rtl' }],
                    [{ 'size': ['small', false, 'large', 'huge'] }],
                    [{ 'header': [1, 2, 3, 4, 5, 6, false] }],
                    [{ 'color': [] }, { 'background': [] }],
                    [{ 'font': [] }],
                    [{ 'align': [] }],
                    ['clean']
                ];

                const quill = new Quill('#editor', {
                    modules: { toolbar: toolbarOptions },
                    theme: 'snow'
                });

                document.querySelector('form').onsubmit = function () {
                    document.querySelector('#hiddenContent').value = quill.root.innerHTML;
                };
            </script>

            <button type="submit" class="w-full font-semibold bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 cursor-pointer">
                Simpan
            </button>
        </form>
    </section>
</main>

<?php include __DIR__ . "/../../views/components/admin-footer.php" ?>
