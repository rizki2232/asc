<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT. ACS</title>
    <link rel="stylesheet" href="/src/css/app.css" />
    <script src="/src/js/alpine.js" defer></script>
</head>

<body>
    <?php include __DIR__ . "/views/components/header.php" ?>

    <div class="relative min-h-screen flex items-start bg-[url('../img/background.png')] bg-center bg-cover bg-no-repeat md:items-center">
        <div class="container mx-auto flex flex-col md:flex-row items-start md:items-center justify-between w-10/12 px-4 pt-24 relative">
            <div class="text-left text-white z-40">
                <h1 class="text-5xl font-bold leading-tight">Delivering Trust,</h1>
                <h1 class="text-5xl font-bold leading-tight">
                    <span class="text-yellow-400">Connecting</span> the Future
                </h1>
            </div>
        </div>
        <img src="src/img/mobil.png" alt="Mobil" class="absolute bottom-0 right-0 w-auto h-1/2 md:h-2/3 md:max-w-[80%] max-h-3/4 -mr-6 object-cover object-left-top">

        <!-- Ombak di Bagian Bawah -->
        <div class="absolute bottom-0 left-0 w-full">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#FFFFFF" fill-opacity="1" d="M0,288L80,266.7C160,245,320,203,480,208C640,213,800,267,960,277.3C1120,288,1280,256,1360,240L1440,224L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path>
            </svg>
        </div>
    </div>

    <?php include __DIR__ . "/views/components/footer.php" ?>
</body>

</html>