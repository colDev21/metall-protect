<section class="mp-page-head">
    <div class="mp-page-head__container">
        <div class="mp-page-head__wrapper">
            <h1 class="mp-page-head__title"><?php echo $pageTitle; ?></h1>
            <ul itemscope itemtype="http://schema.org/BreadcrumbList" class="mp-breadcrumbs">
                <li class="mp-breadcrumbs__item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                    <a class="mp-breadcrumbs__link" itemprop="item" href="#!">
                        <span class="mp-breadcrumbs__name" itemprop="name">Главная страница</span>
                    </a>
                    <span class="mp-breadcrumbs__seperator" itemprop="position" content="1">/</span>
                </li>
                <li class="mp-breadcrumbs__item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                    <a class="mp-breadcrumbs__link" itemprop="item" href="#!">
                        <span class="mp-breadcrumbs__name" itemprop="name"><?php echo $pageTitle; ?></span>
                    </a>
                    <span class="mp-breadcrumbs__seperator" itemprop="position" content="2"></span>
                </li>
            </ul>
        </div>
    </div>
</section>