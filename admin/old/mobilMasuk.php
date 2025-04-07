<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Dashboard Mobil Masuk</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body class="bg-gray-100">
    <div class="flex">
        <?php include 'navbar.php'; ?>
        <?php include 'koneksi.php'; ?> <!-- Koneksi database -->

        <div class="p-6 w-full">
            <div class="bg-white p-6 rounded-lg shadow mx-auto">
                <div class="w-full py-3 flex flex-col">
                    <span class="font-bold text-2xl">Data Mobil Masuk</span>
                    <form action="proses_tambah.php" method="POST" class="grid grid-cols-12 gap-4 p-6 bg-gray-100">
                        
                        <!-- Jumlah -->
                        <div class="col-span-12 md:col-span-4">
                            <label class="block text-gray-700">Jumlah</label>
                            <input type="number" name="jumlah" class="w-full p-2 border rounded-md" placeholder="Masukkan jumlah" required>
                        </div>

                        <!-- Jenis Mobil (Dropdown) -->
                        <div class="col-span-12 md:col-span-4">
                            <label class="block text-gray-700">Merek & Jenis</label>
                            <select id="jenis_mobil" name="jenis" class="w-full p-2 border rounded-md" required>
                                <option value="">Pilih Merek & Jenis</option>
                                <?php
                                $query = "SELECT data_mobil.id_mobil, merek_mobil.merek, data_mobil.jenis, data_mobil.warna, data_mobil.tahun
                                          FROM data_mobil 
                                          JOIN merek_mobil ON data_mobil.id_mobil = merek_mobil.id_merek";
                                $result = mysqli_query($conn, $query);
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<option value='" . $row['id_mobil'] . "' 
                                          data-warna='" . $row['warna'] . "' 
                                          data-tahun='" . $row['tahun'] . "'>
                                          " . $row['merek'] . " - " . $row['jenis'] . "</option>";
                                }
                                ?>
                            </select>
                        </div>

                        <!-- Warna (Otomatis Terisi) -->
                        <div class="col-span-12 md:col-span-4">
                            <label class="block text-gray-700">Warna</label>
                            <input type="text" id="warna" name="warna" class="w-full p-2 border rounded-md" placeholder="Warna mobil" readonly>
                        </div>

                        <!-- Tahun Pembuatan (Otomatis Terisi) -->
                        <div class="col-span-12 md:col-span-4">
                            <label class="block text-gray-700">Tahun Pembuatan</label>
                            <input type="number" id="tahun" name="tahun_pembuatan" class="w-full p-2 border rounded-md" placeholder="Tahun Pembuatan" readonly>
                        </div>

                        <!-- Tombol Hapus -->
                        <div class="col-span-6 flex justify-center">
                            <button type="reset" class="bg-red-500 text-white px-6 py-2 rounded-md hover:bg-red-600 w-full">
                                Hapus
                            </button>
                        </div>

                        <!-- Tombol Tambah -->
                        <div class="col-span-6 flex justify-center">
                            <button type="submit" class="bg-blue-500 text-white px-6 py-2 rounded-md hover:bg-blue-600 w-full">
                                Tambah
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $("#jenis_mobil").change(function() {
                var warna = $("#jenis_mobil option:selected").data("warna");
                var tahun = $("#jenis_mobil option:selected").data("tahun");

                $("#warna").val(warna);
                $("#tahun").val(tahun);
            });
        });
    </script>

</body>

</html>
