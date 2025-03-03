<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pt acs</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
<div class="relative min-h-screen bg-[url('image/backgroud.png')] bg-center bg-cover">
    <!-- Overlay Transparan (di belakang) -->
    <div class="absolute inset-0 bg-black bg-opacity-50 z-0"></div>
    
    <!-- Navbar (di atas) -->
    <nav class="absolute top-0 left-0 w-full flex items-center px-10 py-4 z-10">
        <!-- Logo di Kiri -->
        <img src="image/logo.png" alt="Logo" class="h-14">

        <!-- Menu di Tengah -->
        <div class="absolute left-1/2 transform -translate-x-1/2">
            <ul class="flex space-x-40">
                <li><a href="#" class="text-white hover:text-gray-300">BERANDA</a></li>
                <li><a href="#" class="text-white hover:text-gray-300">PROFILE</a></li>
                <li><a href="#" class="text-white hover:text-gray-300">PARTNERSHIP</a></li>
                <li><a href="#" class="text-white hover:text-gray-300">SERVICEZZZ</a></li>
            </ul>
        </div>
    </nav>

    <!-- Teks di Tengah Layar -->
    <div class="absolute top-1/2 left-1/4 transform -translate-y-1/2 flex items-center text-white z-10 space-x-8">
    <!-- Teks -->
    <div class="text-left">
        <h1 class="text-5xl font-bold">Delivering Trust, </h1>
        <h1 class="text-5xl font-bold">
            <span class="text-yellow-400">Connecting</span> the Future
        </h1>
    </div>

    <!-- Gambar di Sebelah Kanan -->
    <div>
        <img src="image/mobil.png" alt="Mobil" class="h-auto w-auto">
    </div>
</div>
</div>

</div>


    <!-- Ombak di Bagian Bawah -->
    <div class="absolute bottom-0 left-0 w-full">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#FFFFFF" fill-opacity="1" d="M0,288L80,266.7C160,245,320,203,480,208C640,213,800,267,960,277.3C1120,288,1280,256,1360,240L1440,224L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path></svg>
    </div>
</body>
</html>
