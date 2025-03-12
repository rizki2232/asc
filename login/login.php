<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <link rel="shortcut icon" href="img/iconsda.png" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen flex items-center justify-center bg-cover bg-center relative" style="background-image: url('https://images.unsplash.com/photo-1572402123736-c79526db405a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80');">

    <div class="absolute inset-0 bg-black/30 backdrop-blur-sm"></div>

    <div class="relative bg-[#596FB7] p-6 rounded-lg shadow-lg w-80 text-center">
        <img src="../image/logo.png" alt="Logo" class="w-24 h-24 mx-auto mb-4">
        <h2 class="text-2xl font-semibold text-white mb-5">Login Admin</h2>


        <form method="post" action="koneksiLogin.php">
            <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
            <?php }
            ?>

            <div class="text-left">
                <input type="text" name="username" placeholder="username" required
                    class="w-full p-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
            </div>
            <div class="text-left">
                <input type="password" name="password" placeholder="password" required
                    class="w-full p-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
            </div>
            <button type="submit"
                class="w-full py-3 bg-[#11235A] text-white rounded-lg hover:bg-[#0e1c4a] transition">
                Login
            </button>

        </form>
    </div>

</body>

</html>