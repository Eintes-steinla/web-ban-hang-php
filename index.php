<!DOCTYPE html>
<html lang="vi" data-theme="">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- * css -->
    <link rel="stylesheet" href="./src/input.css">
    <link rel="stylesheet" href="./src/output.css">

    <script>
        // On page load or when changing themes, best to add inline in `head` to avoid FOUC
        document.documentElement.classList.toggle(
            "dark",
            localStorage.theme === "dark" ||
            (!("theme" in localStorage) && window.matchMedia("(prefers-color-scheme: dark)").matches)
        );
    </script>
    <title>Home page</title>
</head>

<body class="bg-gray-100 select-none">
    <?php include_once './includes/nav.php'; ?>

    <script src="./public/js/function.js"></script>
</body>

</html>