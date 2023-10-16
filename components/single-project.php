<?php 
    $projectGrid = array(
        "title" => "АМС (антенно-мачтовое сооружение) h-150м",
        "images" => array("./assets/img/projects-grid/a-01.jpg","./assets/img/projects-grid/a-02.jpg","./assets/img/projects-grid/a-03.jpg","./assets/img/projects-grid/a-04.jpg","./assets/img/projects-grid/a-05.jpg","./assets/img/projects-grid/a-06.jpg","./assets/img/projects-grid/a-07.jpg","./assets/img/projects-grid/a-08.jpg","./assets/img/projects-grid/a-09.jpg","./assets/img/projects-grid/a-10.jpg"),
        "params" => array("Местоположение" => "Республика Татарстан", "Год" => "2020", "Объем" => "3000 м2", "Срок" => "45 дней" ),
        "desc" => array("Задача: произвести тщательную очистку поверхности от старого ЛКМ, в рамках ограниченного бюджета, с последующей окраской в соответствии с Приказом Федеральной аэронавигационной службы от 28 ноября 2007 г. N 119", "Решение: Проведя тесты адгезии старого покрытия методом поперечных насечек, было принято решение подготовить поверхность к покраске методом гидроструйной очистки аппаратами сверхвысокого давления.", "Результатом применения этого метода стала экономия ресурсов заказчика на абразивном материале, его уборке и утилизации.", "Ввиду того, что работы производились на высоте до 150 метров, пескоструйные работы были бы неверным решением т. к. разлет абразива был бы неконтролируемым и мог бы попасть в работающие установки, что могло привести к порче или аварии на опасном производстве.")
    );
?>
<div class="mp-projects-grid">
    <div class="mp-projects-grid__container">
        <div class="mp-projects-grid__wrapper">
            <div class="mp-grid-item">
                <div class="mp-grid-item__wrapper">
                    <div class="mp-grid-item__swiper">
                        <div class="swiper mp-grid-item-swiper" id="projectSwiper">
                            <div class="swiper-wrapper mp-grid-item-swiper__wrapper">
                                <?php $countP= 0; foreach ($projectGrid['images'] as $imgUrl): ?>
                                <div class="swiper-slide mp-grid-item-swiper__slide">
                                    <picture>
                                        <img class="mp-grid-item-swiper__image" src="<?php echo $imgUrl; ?>" alt="projects image <?php echo $countP; ?>">
                                    </picture>
                                </div>
                                <?php $countP++; endforeach; ?>
                            </div>
                            <div class="mp-grid-item-swiper__next swiper-next">
                                <img class="mp-grid-item-swiper__nav-icon" src="./assets/icons/icon-arrow-next.svg" alt="next icon">
                            </div>
                            <div class="mp-grid-item-swiper__prev swiper-prev">
                            <img class="mp-grid-item-swiper__nav-icon" src="./assets/icons/icon-arrow-prev.svg" alt="prev icon">
                            </div>
                        </div>
                    </div>
                    <div class="mp-grid-item__content">
                        <h2 class="mp-grid-item__title"><?php echo $projectGrid['title']; ?></h2>
                        <ul class="mp-grid-item__params">
                        <?php foreach ($projectGrid['params'] as $key => $value): ?>
                            <li class="mp-grid-item__param-item">
                                <span><?php echo $key; ?>:</span>
                                <span><?php echo $value; ?></span>
                            </li>
                        <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="mp-grid-item__description" style="margin-top: 3vw;">
                        <?php foreach ($projectGrid['desc'] as $parag): ?>
                            <p><?php echo $parag; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include('feedback.php'); ?>
</div>