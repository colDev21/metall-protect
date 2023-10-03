<?php 
    $overviewMenus = array(
        array("title" => "Цены", "url" => "#!", "status" => "disabled", "iconUrl" => "./assets/icons/page-services/icon-prices.svg"),
        array("title" => "Материалы", "url" => "#!", "status" => "disabled", "iconUrl" => "./assets/icons/page-services/icon-instruments.svg"),
        array("title" => "Калькулятор", "url" => "#!", "status" => "enabled", "iconUrl" => "./assets/icons/page-services/icon-calculator.svg"),
        array("title" => "Этапы работ", "url" => "#!", "status" => "disabled", "iconUrl" => "./assets/icons/page-services/icon-steps.svg"),
        array("title" => "Виды", "url" => "#!", "status" => "active", "iconUrl" => "./assets/icons/page-services/icon-views.svg"),
        array("title" => "ГОСТы", "url" => "#!", "status" => "disabled", "iconUrl" => "./assets/icons/page-services/icon-gost.svg"),
        array("title" => "Нормативные документы", "url" => "#!", "status" => "disabled", "iconUrl" => "./assets/icons/page-services/icon-docs.svg")
    )
?>
<div class="overview-menu">
    <div class="overview-menu__image">
        <div class="om-image">
            <div class="om-image__img-wrapper">
                <img src="./assets/img/service-page/page-silosy.jpg" alt="silosy" class="om-image__img">
            </div>
            <div class="om-image__caption">
                <span>Также покраска металлических конструкций выполняется с применением иных разновидностей лакокрасочных покрытий.</span>
            </div>
        </div>
    </div>
    <div class="overview-menu__list">
        <div class="om-menu">
            <ul class="p-menu">
                <?php foreach ($overviewMenus as $key => $menu) : ?>
                <li class="p-menu__item">
                    <a href="<?php echo $menu["url"]; ?>" class="p-menu__link <?php if($key === $page): echo 'p-menu_active'; endif; ?> <?php echo $menu["status"]; ?>">
                        <img class="p-menu__icon" src="<?php echo $menu['iconUrl']; ?>" alt="<?php echo $menu['title']; ?>">
                        <span><?php echo $menu['title']; ?></span>
                    </a>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>