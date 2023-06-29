<?php 
    $menus = array(
        "about" => array("title" => "О компании", "url" => "#!", "submenus" => array()),
        "services" => array("title" => "Услуги", "url" => "#!", "submenus" => array(
            "pokraksa" => array("title" => "Покраска", "url" => "#!"),
            "ognezashita" => array("title" => "Огнезащита", "url" => "#!"),
            "peskostruy" => array("title" => "Пескоструй", "url" => "#!"),
            "gidrostruy" => array("title" => "Гидроструй", "url" => "#!"),
            "vysotnie_raboty" => array("title" => "Высотные работы", "url" => "#!"),
        )),
        "projects" => array("title" => "Проекты", "url" => "#!", "submenus" => array()),
        "faq" => array("title" => "Вопрос-ответ", "url" => "#!", "submenus" => array()),
        "contacts" => array("title" => "Контакты", "url" => "#!", "submenus" => array()),
    )
?>
<ul class="mp-header-menu">
    <?php foreach ($menus as $key => $menu) : ?>
    <li class="mp-header-menu__item">
        <a href="<?php echo $menu["url"]; ?>" class="mp-header-menu__link <?php if($key === $page): echo 'mp-header-menu_active'; endif; ?>"><?php echo $menu['title']; ?></a>
        <?php if($menu['submenus']): ?>
        <div class="mp-sub-menu">
            <ul class="mp-sub-menu__wrapper">
                <?php foreach ($menu['submenus'] as $key => $submenu) : ?>
                <li class="mp-sub-menu__item">
                    <a href="<?php echo $submenu["url"]; ?>" class="mp-sub-menu__link"><?php echo $submenu["title"]; ?></a>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <?php endif; ?>
    </li>
    <?php endforeach; ?>
</ul>