<!DOCTYPE html>
<html lang="ru">
<head>
    <?php $assetVersion = '1.2'; ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="library/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" type="text/css" href="styles/css/styles.css?v=<?php echo $assetVersion; ?>" />
    <link rel="stylesheet" type="text/css" href="styles/css/custom.css?v=<?php echo $assetVersion; ?>" />
    <link rel="icon" href="/favicon.ico">
    <meta name="description" content="Лицензия МЧС 16-Б/01185 от 10 декабря 2020">
    <title>ООО "Металл Протект". Промышленная покраска и огнезащита</title>
</head>
<body>
    <?php
        $page = 'service';
        $pageTitle = 'Покраска Металлоконструкций';
        include('components/header.php');
    ?>
    <main>
        <?php
            include('components/pagehead.php');
            include('pages/page-menu.php');
            include('pages/service-page/service-overview.php');
            include('pages/service-page/service-order-banner.php');
            include('pages/service-page/service-prices.php');
            include('pages/service-page/service-advantages.php');
            include('pages/service-page/service-steps.php');
            include('pages/service-page/service-videos.php');
            include('pages/service-page/service-products.php');
            include('pages/service-page/service-our-projects.php');
            include('pages/service-page/service-feedbacks.php');
            include('pages/service-page/service-docs.php');
            include('components/feedback.php');
            include('components/footer.php');
        ?>
    </main>
    <script type="text/javascript" src="library/swiper/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="scripts/common.js?v=<?php echo $assetVersion; ?>"></script>
    <script type="text/javascript" src="scripts/parts/calculator.js?v=<?php echo $assetVersion; ?>"></script>
    <script type="text/javascript" src="scripts/parts/projects-grid.js?v=<?php echo $assetVersion; ?>"></script>
</body>
</html>
