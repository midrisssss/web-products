<?php ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <script src="https://cdn.tailwindcss.com/"></script>
</head>

<body class="w-svw h-svw">
    <?php include "./components/header.php"; ?>
    <div id="content">
        <h1 class="text-center text-9xl font-bold">Home</h1>
    </div>
    <?php include "./components/footer.php"; ?>
    <script>
        let navactive = document.getElementById("home");
        navactive.classList.add("text-blue-600");
    </script>
</body>

</html>