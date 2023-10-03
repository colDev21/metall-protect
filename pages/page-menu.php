<?php 
    $pageMenus = array(
        "pokraska" => array("title" => "Покраска", "url" => "#!", "status" => "disabled"),
        "fasady" => array("title" => "Фасады зданий и сооружений", "url" => "#!", "status" => "enabled"),
        "silosy" => array("title" => "Силосы", "url" => "#!", "status" => "active"),
        "wysotnaya" => array("title" => "Высотная покраска", "url" => "#!", "status" => "disabled"),
        "krany" => array("title" => "Краны", "url" => "#!", "status" => "disabled"),
        "opory" => array("title" => "Опоры ЛЭП", "url" => "#!", "status" => "disabled"),
        "bezwozdushnaya" => array("title" => "Безвоздушная покраска", "url" => "#!", "status" => "disabled"),
        "antenno" => array("title" => "Антенно-мачтовые сооружения", "url" => "#!", "status" => "disabled"),
        "rezervuary" => array("title" => "Резервуары", "url" => "#!", "status" => "disabled")
    )
?>
<section class="page-menu">
    <div class="page-menu__container">
        <div class="page-menu__wrapper">
            <ul class="p-menu">
                <?php foreach ($pageMenus as $key => $menu) : ?>
                <li class="p-menu__item">
                    <a href="<?php echo $menu["url"]; ?>" class="p-menu__link <?php if($key === $page): echo 'p-menu_active'; endif; ?> <?php echo $menu["status"]; ?>">
                        <span><?php echo $menu['title']; ?></span>
                    </a>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</section>