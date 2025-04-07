<?php

require_once dirname(__DIR__, 2) . '/src/db/connection.php';
$db = new Database();
$conn = $db->conn;

$query = "SELECT * FROM posts";
$result = $conn->query($query);

$thead = ['No', 'Judul', 'Tanggal Diterbitkan'];
$no = 1;

?>

<?php include __DIR__ . "/../../views/components/admin-header.php" ?>

<main class="main mx-auto h-full w-full px-4 md:px-6 lg:px-8 max-w-7xl bg-white shadow">
    <section class="flex flex-col gap-y-8 py-8">
        <header class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
            <div>
                <h1 class="text-2xl font-bold tracking-tight text-gray-950 dark:text-white sm:text-3xl">
                    Post
                </h1>
            </div>
            <div class="flex shrink-0 items-center gap-3">
                <div class="gap-2 flex flex-wrap items-center justify-start">
                    <a href="/admin/post/create.php" class="relative grid-flow-col items-center justify-center font-semibold outline-none transition duration-75 focus-visible:ring-2 rounded-lg bg-primary gap-1.5 px-3 py-2 text-sm inline-grid shadow-sm bg-custom-600 text-white hover:bg-custom-500 focus-visible:ring-custom-500/50 dark:bg-custom-500 dark:hover:bg-custom-400 dark:focus-visible:ring-custom-400/50 xpc fi-ac-btn-action">
                        <span>Tambah post</span>
                    </a>
                </div>
            </div>
        </header>
        <div class="divide-y divide-gray-200">
            <div class="pb-3">
                <div class="flex rounded-lg shadow-sm ring-1 ring-gray-200 focus-within:ring-primary">
                    <div class="items-center gap-x-3 ps-3 flex pe-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5 text-gray-400">
                            <path fill-rule="evenodd" d="M10.5 3.75a6.75 6.75 0 1 0 0 13.5 6.75 6.75 0 0 0 0-13.5ZM2.25 10.5a8.25 8.25 0 1 1 14.59 5.28l4.69 4.69a.75.75 0 1 1-1.06 1.06l-4.69-4.69A8.25 8.25 0 0 1 2.25 10.5Z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <input type="text" class="w-full px-3 py-1.5 ps-0 pe-3 text-base placeholder:text-gray-400 focus:outline-0 sm:text-sm sm:leading-6" placeholder="Cari post">
                </div>
            </div>
            <div class="relative divide-y divide-gray-200 overflow-x-auto">
                <table class="w-full table-auto divide-y divide-gray-200 text-start">
                    <thead class="divide-y divide-gray-200">
                        <tr class="">
                            <?php foreach ($thead as $th) : ?>
                                <th class="px-3 py-3.5 sm:first-of-type:ps-6 sm:last-of-type:pe-6">
                                    <div class="flex items-center justify-start">
                                        <span class="text-sm font-semibold text-gray-950"><?= $th ?></span>
                                    </div>
                                </th>
                            <?php endforeach; ?>
                            <th class="w-1"></th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 whitespace-nowrap">
                        <?php if ($result->num_rows > 0) : ?>
                            <?php while ($row = $result->fetch_assoc()) : ?>
                                <tr class="hover:bg-gray-50">
                                    <td class="p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3">
                                        <a href="edit.php?id=<?php echo $row['id_posts']; ?>">
                                            <div class="px-3 py-4">
                                                <span class="text-sm leading-6 text-gray-950 dark:text-white font-medium"><?= $no++; ?></span>
                                            </div>
                                        </a>
                                    </td>
                                    <td class="p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3">
                                        <a href="edit.php?id=<?php echo $row['id_posts']; ?>">
                                            <div class="px-3 py-4">
                                                <span class="text-sm leading-6 text-gray-950 dark:text-white font-medium"><?= $row['title']; ?></span>
                                            </div>
                                        </a>
                                    </td>
                                    <td class="p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3">
                                        <a href="edit.php?id=<?php echo $row['id_posts']; ?>">
                                            <div class="px-3 py-4">
                                                <span class="text-sm leading-6 text-gray-950 dark:text-white font-medium"><?= date('d/m/Y', strtotime($row['published_at'])) ?></span>
                                            </div>
                                        </a>
                                    </td>
                                    <td class="flex p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3">
                                        <div class="flex items-center gap-x-2 whitespace-nowrap px-3 py-4">
                                            <a href="edit.php?id=<?php echo $row['id_posts']; ?>">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5 fill-green-400">
                                                    <path d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32L19.513 8.2Z" />
                                                </svg>
                                            </a>
                                            <a href="delete.php?id=<?php echo $row['id_posts']; ?>" onclick="return confirm('Yakin ingin menghapus?');">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5 fill-red-500">
                                                    <path fill-rule="evenodd" d="M16.5 4.478v.227a48.816 48.816 0 0 1 3.878.512.75.75 0 1 1-.256 1.478l-.209-.035-1.005 13.07a3 3 0 0 1-2.991 2.77H8.084a3 3 0 0 1-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 0 1-.256-1.478A48.567 48.567 0 0 1 7.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 0 1 3.369 0c1.603.051 2.815 1.387 2.815 2.951Zm-6.136-1.452a51.196 51.196 0 0 1 3.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 0 0-6 0v-.113c0-.794.609-1.428 1.364-1.452Zm-.355 5.945a.75.75 0 1 0-1.5.058l.347 9a.75.75 0 1 0 1.499-.058l-.346-9Zm5.48.058a.75.75 0 1 0-1.498-.058l-.347 9a.75.75 0 0 0 1.5.058l.345-9Z" clip-rule="evenodd" />
                                                </svg>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            <?php endwhile; ?>
                        <?php else : ?>
                            <tr>
                                <td class="pt-8 text-center" colspan="<?php echo count($thead); ?>">Tidak ada data tersedia</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</main>

<?php include __DIR__ . "/../../views/components/admin-footer.php" ?>
