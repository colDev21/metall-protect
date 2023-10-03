<?php
$productNames = array("HeavyCoat 960 Е SSP","HeavyCoat 960 Е SSP","Graco dutymax 
eh 300","Contracor dmx 2200","Aspro 6000","Graco GX 21")
?>
<section class="service-products">
    <div class="service-products__container">
        <div class="service-products__wrapper">
            <h2 class="service-products__title">Покрасочное оборудование</h2>
            <div class="service-products__list">
                <div class="spd-list">
                    <?php foreach ($productNames as $pnames) : ?>
                    <a href="#!" class="spd-list__item">
                        <div class="spd-list__img-wrapper">
                            <img src="./assets/img/service-page/page-product.jpg" alt="page-product" class="spd-list__img">
                        </div>
                        <span class="spd-list__title"><?php echo $pnames; ?></span>
                    </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>