<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tài liệu</title>
    <link rel="stylesheet" href="./source/css/base.css">
    <link rel="stylesheet" href="./source/css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="./assets/fonts/fontawesome-free-6.1.1-web/css/all.min.css">
    <script src="./source/javascript/navBarActiveControl.js"></script>
</head>

<body>
    <?php
    require './header.php';
    ?>
    <script>
        var pageName = 'Trợ giúp';
        setNavActive(pageName);
    </script>

    <?php
    require './source/html/mainteinance.html';
    require './source/html/footer.html';
    ?>
</body>

</html>