<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Float - Interior Design</title>

    <link rel="stylesheet" href="./assets/stylesheet/css/style.css" />

    <!-- Include Poppins font. -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<div class="initial-overlay"></div>

<body class="grid-view">

    <?php include 'sidebar.php'; ?>
    <div class="overlay" id="overlay"></div>
    <div class="interior-main">
        <?php
        include './sections/showcase.php';
        echo showcase('f-row', 'f-col f-col-6')
        ?>

        <?php
        include './sections/services.php';
        echo services();
        ?>

        <?php
        include './sections/designers.php';
        echo designers('grid grid-cols-3', '');
        ?>

        <?php
        include './sections/packages.php';
        echo packages('grid grid-cols-2', '');
        ?>

        <?php
        include './sections/contact.php';
        echo contact();
        ?>

        <?php
        include './sections/footer.php';
        echo footer();
        ?>
    </div>

    <script src="./assets/js/main.js"></script>
    <script src="./assets/js/fslightbox.js"></script>
</body>

</html>