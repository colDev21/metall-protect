<?php 
    $stps = array(
        array("text" => "Осмотр объекта и изучение рабочей документации", "iconUrl" => "./assets/icons/page-services/icon-buildings.svg", "alt" => "icon-buildings"),
        array("text" => "Разработка технического решения", "iconUrl" => "./assets/icons/page-services/icon-solutions.svg", "alt" => "icon-solutions"),
        array("text" => "Согласование стоимости и сроков выполнения работ", "iconUrl" => "./assets/icons/page-services/icon-ruble.svg", "alt" => "icon-ruble"),
        array("text" => "Подписание комплекта документов", "iconUrl" => "./assets/icons/page-services/icon-docs-collection.svg", "alt" => "icon-docs-collection"),
        array("text" => "Разработка и согласование ППР", "iconUrl" => "./assets/icons/page-services/icon-checklist.svg", "alt" => "icon-checklist"),
        array("text" => "Разработка проекта огнезащиты (ПОЗ)", "iconUrl" => "./assets/icons/page-services/icon-flame.svg", "alt" => "icon-flame"),
    )
?>
<section class="service-steps">
    <div class="service-steps__container">
        <div class="service-steps__wrapper">
            <h2 class="service-steps__title">Схема (этапы) работы с нами</h2>
            <div class="service-steps__list">
                <div class="stp-list">
                    <?php foreach ($stps as $key => $stp) : ?>
                        <div class="stp-list__item">
                            <div class="stp-list__icon-wrapper">
                                <img class="stp-list__icon" src="<?php echo $stp["iconUrl"]; ?>" alt="<?php echo $stp["alt"]; ?>" class="stp-list__icon">
                            </div>
                            <span class="stp-list__text"><?php echo $stp["text"]; ?></span>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>