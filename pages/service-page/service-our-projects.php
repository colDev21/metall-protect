<section class="service-our-projects">
    <div class="service-our-projects__container">
        <div class="service-our-projects__wrapper">
            <h2 class="service-our-projects__title">Наши проекты</h2>
            <div class="service-our-projects__row">
                <?php for ($px = 0; $px <= 2; $px++) : ?>
                <div class="service-our-projects__col">
                    <div class="service-our-projects__item">
                        <div class="service-our-projects__thumbs">
                            <div class="sv-thumb">
                                <div class="sv-thumb__img-wrapper">
                                    <img class="sv-thumb__img" src="./assets/img/service-page/page-video-thumb.jpg" alt="page-video-thumb">
                                </div>
                            </div>
                        </div>
                        <h3 class="service-our-projects__subtitle">Проект 1</h3>
                        <p class="service-our-projects__caption">Равным образом консультация с широким активом представляет собой интересный эксперимент проверки дальнейших направлений развития.</p>
                        <a href="#!" class="service-our-projects__button">Подробнее</a>
                    </div>
                </div>
                <?php endfor; ?>
            </div>
        </div>
    </div>
</section>