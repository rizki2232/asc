<?php

require_once dirname(__DIR__, 2) . '/src/db/connection.php';
$db = new Database();
$conn = $db->conn;

$query = "SELECT * FROM posts";
$result = $conn->query($query);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // var_dump($_POST);

    $title = $_POST['title'];
    $published_at = $_POST['date'];
    $body = $_POST['body'];

    try {
        $sql = "INSERT INTO posts (title, body, published_at) VALUES ('$title', '$body', '$published_at')";
        $conn->query($sql);
        echo '<div class="mt-4 p-4 bg-green-100 border border-green-400 text-green-700 rounded-md">Data berhasil disimpan</div>';
    } catch (Exception $e) {
        echo '<div class="mt-4 p-4 bg-red-100 border border-red-400 text-red-700 rounded-md">Error: ' . $e->getMessage() . '</div>';
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
                    Tambah post
                </h1>
            </div>
        </header>
        <div class="">
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="space-y-4">
                <div>
                    <label for="title" class="block text-sm font-medium text-gray-700">Judul</label>
                    <input type="text" id="title" name="title" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                </div>
                <div>
                    <label for="date" class="block text-sm font-medium text-gray-700">Tanggal diterbitkan</label>
                    <input type="date" id="date" name="date" value="<?= date('Y-m-d'); ?>" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                </div>
                <div>
                    <label for="image" class="block text-sm font-medium text-gray-700">Foto</label>
                    <input
                        id="image"
                        type="file"
                        class="mt-2 file:mr-4 file:rounded-full file:border-0 file:bg-blue-50 file:px-4 file:py-2 file:text-sm file:font-semibold file:text-blue-700 hover:file:bg-violet-100 dark:file:bg-violet-600 dark:file:text-violet-100 dark:hover:file:bg-violet-500 cursor-pointer" />
                </div>
                <div>
                    <label for="editor" class="block mb-2 text-sm font-medium text-gray-700">Konten</label>
                    <div id="editor">
                        <h2>Demo Content</h2>
                        <p>Preset build with <code>snow</code> theme, and some common formats.</p>
                    </div>
                    <input type="hidden" name="body" id="hiddenContent">
                </div>

                <script>
                    const toolbarOptions = [
                        ['bold', 'italic', 'underline', 'strike'], // toggled buttons
                        ['blockquote', 'code-block'],
                        ['link'],

                        [{
                            'header': 1
                        }, {
                            'header': 2
                        }], // custom button values
                        [{
                            'list': 'ordered'
                        }, {
                            'list': 'bullet'
                        }, {
                            'list': 'check'
                        }],
                        [{
                            'script': 'sub'
                        }, {
                            'script': 'super'
                        }], // superscript/subscript
                        [{
                            'indent': '-1'
                        }, {
                            'indent': '+1'
                        }], // outdent/indent
                        [{
                            'direction': 'rtl'
                        }], // text direction

                        [{
                            'size': ['small', false, 'large', 'huge']
                        }], // custom dropdown
                        [{
                            'header': [1, 2, 3, 4, 5, 6, false]
                        }],

                        [{
                            'color': []
                        }, {
                            'background': []
                        }], // dropdown with defaults from theme
                        [{
                            'font': []
                        }],
                        [{
                            'align': []
                        }],

                        ['clean'] // remove formatting button
                    ];

                    const quill = new Quill('#editor', {
                        modules: {
                            toolbar: toolbarOptions
                        },
                        theme: 'snow'
                    });

                    document.querySelector('form').onsubmit = function() {
                        document.querySelector('#hiddenContent').value = quill.root.innerHTML;
                    };
                </script>
                <button type="submit" class="w-full font-semibold bg-primary/90 text-white py-2 px-4 rounded-md hover:bg-primary cursor-pointer">Simpan</button>
            </form>
        </div>
    </section>
</main>

<?php include __DIR__ . "/../../views/components/admin-footer.php" ?>