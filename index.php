<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flex - Interior Design</title>

    <?php include './stylesheets.php' ?>
</head>

<div class="loader-container">
    <div class="loader">
        <div class="loader-animation"></div>
        <div class="loader-animation"></div>
        <div class="loader-animation"></div>
    </div>
</div>

<body>
    <div class="overlay main"></div>

    <?php
    include 'sidebar.php';
    echo sidebar();
    ?>

    <?php
    include 'mobile-sidebar.php';
    echo mobile_sidebar();
    ?>

    <div class="overlay" id="overlay">
    </div>

    <div class="id-main">
        <div class="open-sidebar" id="open-sidebar">
            <div class="container">
                <a class="sidebar-toggle">
                    <div class="id-arrow">
                        <div class="line"></div>
                        <div class="chevron"></div>
                    </div>
                </a>
            </div>
        </div>
        <?php
        include './sections/showcase.php';
        echo showcase('row', 'col col-lg-6')
        ?>

        <?php
        include './sections/services.php';
        echo services();
        ?>

        <?php
        include './sections/designers.php';
        echo designers('row', 'col col-md-6 col-lg-4');
        ?>

        <?php
        include './sections/packages.php';
        echo packages('row', 'col col-lg-6');
        ?>

        <?php
        include './sections/contact.php';
        echo contact();
        ?>
    </div>

    <?php
    include './footer.php';
    echo footer();
    ?>

    <?php include './scripts.php' ?>
</body>

</html>