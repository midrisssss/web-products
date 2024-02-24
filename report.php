<?php ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report</title>
    <script src="https://cdn.tailwindcss.com/"></script>
</head>

<body>
    <?php include "./components/header.php"; ?>
    <div id="content" class="pb-44">
        <?php include "./components/reportsTables.php"; ?>
    </div>
    <?php include "./components/footer.php"; ?>
    <script>
        let navactive = document.getElementById("reports");
        navactive.classList.add("text-blue-600");
    </script>
</body>

</html>