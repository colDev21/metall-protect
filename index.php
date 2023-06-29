<!DOCTYPE html>
<html lang="ru">
<head>
    <?php $assetVersion = '1.1'; ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="library/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" type="text/css" href="styles/css/styles.css?v=<?php echo $assetVersion; ?>" />
    <link rel="stylesheet" type="text/css" href="styles/css/custom.css?v=<?php echo $assetVersion; ?>" />
    <script src="https://api-maps.yandex.ru/2.1/?apikey=ad2a15e6-7ec7-43a9-b823-c3140a653977&lang=ru_RU" type="text/javascript"></script>
    <link rel="icon" href="/favicon.ico">
    <meta name="description" content="Лицензия МЧС 16-Б/01185 от 10 декабря 2020">
    <title>ООО "Металл Протект". Промышленная покраска и огнезащита</title>
</head>
<body>
    <?php
        $page = 'home';
        include('components/header.php')
?>
    <main>
        <?php
            include('components/masthead.php');
            include('components/about.php');
            include('components/services.php');
            include('components/products.php');
            include('components/home-projects.php');
            include('components/docs.php');
            include('components/feedback.php');
            include('components/map.php');
            include('components/footer.php');
        ?>
    </main>
    <script type="text/javascript" src="library/swiper/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="scripts/common.js?v=<?php echo $assetVersion; ?>"></script>
    <script type="text/javascript" src="scripts/parts/masthead.js?v=<?php echo $assetVersion; ?>"></script>
    <script type="text/javascript" src="scripts/parts/map.js?v=<?php echo $assetVersion; ?>"></script>
    <script type="text/javascript" src="scripts/parts/calculator.js?v=<?php echo $assetVersion; ?>"></script>
</body>
</html>
