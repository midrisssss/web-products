<?php ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <script src="https://cdn.tailwindcss.com/"></script>
</head>

<body>
    <?php include "./components/header.php"; ?>
    <div id="content" class="w-full">
        <?php include "./components/productsTable.php"; ?>
    </div>
    <?php include "./components/footer.php"; ?>
    <script>
        let navactive = document.getElementById("products");
        navactive.classList.add("text-blue-600");
    </script>
</body>

</html>