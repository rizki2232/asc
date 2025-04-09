<?php

require_once dirname(__DIR__, 2) . '/src/db/connection.php';
$db = new Database();
$conn = $db->conn;

$id = $_GET['id_posts'];

// Ambil data mobil berdasarkan ID
$query = "SELECT * FROM posts WHERE id_posts = '$id'";
$result = $conn->query($query);
$data = $result->fetch_assoc();

?>

<?php include __DIR__ . "/../../views/components/admin-header.php" ?>

<main class="main mx-auto h-full w-full px-4 md:px-6 lg:px-8 max-w-7xl bg-white shadow">
    <section class="flex flex-col gap-y-8 py-8">
        <header class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
            <div>
                <h1 class="text-2xl font-bold tracking-tight text-gray-950 dark:text-white sm:text-3xl">
                    Edit post
                </h1>
            </div>
        </header>
        <div class="">
            <form method="post" action="update.php" enctype="multipart/form-data" class="space-y-4">

                <input type="hidden" name="id_posts" value="<?= htmlspecialchars($data['id_posts']) ?>">

                <div>
                    <label for="title" class="block text-sm font-medium text-gray-700">Judul</label>
                    <input type="text" id="title" name="title" value="<?= htmlspecialchars($data['title']) ?>" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                </div>
                <div>
                    <label for="date" class="block text-sm font-medium text-gray-700">Tanggal diterbitkan</label>
                    <input type="date" id="date" name="date" value="<?= date('Y-m-d', strtotime($data['published_at'])) ?>" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                </div>
                <div>
                    <label for="gambar" class="block text-sm font-medium text-gray-700">Gambar</label>
                    <input
                        id="gambar"
                        type="file"
                        name="gambar"
                        accept="image/*"
                        class="mt-2 file:mr-4 file:rounded-full file:border-0 file:bg-blue-50 file:px-4 file:py-2 file:text-sm file:font-semibold file:text-blue-700 hover:file:bg-violet-100 dark:file:bg-violet-600 dark:file:text-violet-100 dark:hover:file:bg-violet-500 cursor-pointer" />
                </div>

                <div>
                    <label for="editor" class="block mb-2 text-sm font-medium text-gray-700">Konten</label>
                    <div id="editor">
                        <?= htmlspecialchars_decode($data['body']) ?>
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

                <button type="submit" class="w-full font-semibold bg-primary/90 text-white py-2 px-4 rounded-md hover:bg-primary cursor-pointer">Perbarui</button>
            </form>
        </div>
    </section>
</main>

<?php include __DIR__ . "/../../views/components/admin-footer.php" ?>