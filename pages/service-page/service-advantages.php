<?php 
    $advs = array(
        array("text" => "Более 15 единиц топового покрасочного и пескоструйного оборудования, обеспечивающие одновременную работу более 20 человек", "iconUrl" => "./assets/icons/page-services/icon-paint-bucket.svg", "alt" => "icon-paint-bucket"),
        array("text" => "Оборудование от немецких и японских производителей", "iconUrl" => "./assets/icons/page-services/icon-gear.svg", "alt" => "icon-gear"),
        array("text" => "Работа на высоте до 250 метров", "iconUrl" => "./assets/icons/page-services/icon-building.svg", "alt" => "icon-building"),
        array("text" => "Опыт работы более 12 лет", "iconUrl" => "./assets/icons/page-services/icon-calendar.svg", "alt" => "icon-calendar"),
        array("text" => "Современные измерительные приборы для контроля качества антикоррозийных работ", "iconUrl" => "./assets/icons/page-services/icon-instruments.svg", "alt" => "icon-instruments"),
        array("text" => "Комплекс услуг «под ключ» (разработка проекта, подбор материала, сдача ИПЛ и др.)", "iconUrl" => "./assets/icons/page-services/icon-pipe-wrench.svg", "alt" => "icon-pipe-wrench"),
        array("text" => "Возможность проведения работ в три смены", "iconUrl" => "./assets/icons/page-services/icon-constructor.svg", "alt" => "icon-constructor"),
        array("text" => "Персональный менеджер", "iconUrl" => "./assets/icons/page-services/icon-user.svg", "alt" => "icon-user"),
    )
?>
<section class="service-advantages">
    <div class="service-advantages__container">
        <div class="service-advantages__wrapper">
            <h2 class="service-advantages__title">Наши преимущества</h2>
            <div class="service-advantages__list">
                <div class="adv-list">
                <?php foreach ($advs as $key => $adv) : ?>
                    <div class="adv-list__item">
                        <div class="adv-list__icon-wrapper">
                            <img src="<?php echo $adv["iconUrl"]; ?>" alt="<?php echo $adv["alt"]; ?>" class="adv-list__icon">
                        </div>
                        <span class="adv-list__text"><?php echo $adv["text"]; ?></span>
                    </div>
                <?php endforeach; ?>
                </div>
            </div>
            <h3 class="service-advantages__sub-title">Особенности покраски металлоконструкций на высоте промышленными альпинистами</h3>
            <div class="service-advantages__row">
                <div class="service-advantages__col">
                    <p class="service-advantages__text">Быстро и качественно окрасить металлические конструкции можно с привлечением промышленных альпинистов. Высококвалифицированные специалисты компании «Металл Протект» имеют большой опыт покрасочных работ на высоте.</p>
                    <p class="service-advantages__text">Высотные мероприятия по обслуживанию конструкций из металла имеют множество особенностей при проведении. Профессиональные мастера проходят специальное обучение, получают соответствующий допуск к таким работам. Они могут справиться с покраской металлоконструкций любой сложности.</p>
                    <ul class="sp-list">
                        <li class="sp-list__item">Промышленным альпинистам проще окрашивать криволинейные, труднодоступные поверхности.</li>
                        <li class="sp-list__item">Работы выполняются быстрее и качественнее, благодаря манёвренности работников.</li>
                    </ul>
                </div>
                <div class="service-advantages__col">
                    <ul class="sp-list">
                        <li class="sp-list__item">Использование специального профессионального снаряжения уменьшает риск травмирования, практически полностью исключает возможность несчастных случаев.</li>
                        <li class="sp-list__item">Применение данной технологии позволяет не прерывать рабочий процесс.</li>
                    </ul>
                    <p class="service-advantages__text">Заказать услуги по покраске металлоконструкций промышленными альпинистами гораздо выгоднее, чем проводить работы с применением спецтехники, вспомогательных конструкций или подъёмных механизмов. Затраты на обслуживание будут ниже, скорость окрашивания значительно увеличится.</p>
                    <p class="service-advantages__text">Услуги промышленных альпинистов востребованы при окрашивании ЛЭП, АМС, мостов, кранов, резервуаров, эстакад. Часто специалистов привлекают для окрашивания рекламных баннеров на крышах зданий и сооружений, дымовых труб, стропильных конструкций из металла и многих других высотных объектов.</p>
                </div>
            </div>
        </div>
    </div>
</section>