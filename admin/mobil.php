<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Dashboard Admin</title>
</head>

<body class="bg-gray-100">
    <div class="flex">
        <?php include 'navbar.php'; ?>
        <div class="p-6 w-full">
            <div class="bg-white p-6 rounded-lg shadow  mx-auto">
                <div class="w-full py-3 flex flex-col">
                    <span class="font-bold text-2xl">Data Mobil</span>
                    <div class="flex gap-3 mt-3">
                        <a href="mobil/tambahMobil.php" class="w-1/4">
                            <button type="button" class="w-full bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600">
                                Tambah Mobil
                            </button>
                        </a>
                        <a href="mobil/tambahMerek.php" class="w-1/4">
                            <button type="button" class="w-full bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-green-600">
                                Tambah Merek
                            </button>
                        </a>
                    </div>
                </div>



                <div class="overflow-x-auto">
                    <table class="min-w-full border border-gray-300 my-4">
                        <thead class="my-4">
                            <tr class="bg-gray-200 ">
                                <th class="border px-4 py-3 text-left">No</th>
                                <th class="border px-4 py-3 text-left">Merek</th>
                                <th class="border px-4 py-3 text-left">Jenis</th>
                                <th class="border px-4 py-3 text-left">Warna</th>
                                <th class="border px-4 py-3 text-left">Tahun</th>
                                <th class="border px-4 py-3 text-left">Tanggal Masuk</th>
                                <th class="border px-4 py-3 text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            require_once("koneksi.php");
                            $query = "SELECT 
                                data_mobil.id_mobil,
                                merek_mobil.merek AS nama_merek,
                                data_mobil.jenis,
                                data_mobil.jumlah,
                                data_mobil.tanggal,
                                data_mobil.warna,
                                data_mobil.tahun
                            FROM data_mobil
                            JOIN merek_mobil ON data_mobil.id_merek = merek_mobil.id_merek;";
                            $result = $conn->query($query);
                            if ($result->num_rows > 0) {
                                $index = 1;
                                while ($row = $result->fetch_assoc()) {
                            ?>
                                    <tr class="text-center border">
                                        <td class="border px-4 py-3"><?php echo $index; ?></td>
                                        <td class="border px-4 py-3"><?php echo $row["nama_merek"]; ?></td>
                                        <td class="border px-4 py-3"><?php echo $row["jenis"]; ?></td>
                                        <td class="border px-4 py-3"><?php echo $row["warna"]; ?></td>
                                        <td class="border px-4 py-3"><?php echo $row["tahun"]; ?></td>
                                        <td class="border px-4 py-3"><?php echo $row["tanggal"]; ?></td>
                                        <td class="border px-4 py-3 flex justify-center space-x-2">
                                            <a href="mobil/editMobil.php?id_mobil=<?php echo $row['id_mobil']; ?>" class="bg-blue-500 text-white px-3 py-1 rounded">edit</a>
                                            <a href="mobil/hapusMobil.php?id=<?php echo $row['id_mobil']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus mobil ini?');" class="bg-red-500 text-white px-3 py-1 rounded">hapus</a>
                                        </td>
                                    </tr>
                            <?php
                                    $index++;
                                }
                            } else {
                                echo "<tr><td colspan='7' class='border px-4 py-2 text-center'>Data tidak ditemukan</td></tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>