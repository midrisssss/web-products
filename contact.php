<?php ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <script src="https://cdn.tailwindcss.com/"></script>
</head>

<body>
    <?php include "./components/header.php"; ?>
    <div id="content">
        <h1 class="text-center font-bold text-9xl">Contact</h1>
    </div>
    <?php include "./components/footer.php"; ?>
    <script>
        let navactive = document.getElementById("contact");
        navactive.classList.add("text-blue-600");
    </script>
</body>

</html>