<section class="service-videos">
    <div class="service-videos__container">
        <div class="service-videos__wrapper">
            <h2 class="service-videos__title">Видео наших работ</h2>
            <div class="service-videos__row">
                <?php for ($x = 0; $x <= 3; $x++) : ?>
                <div class="service-videos__col">
                    <div class="service-videos__item">
                        <div class="service-videos__thumbs">
                            <div class="sv-thumb">
                                <div class="sv-thumb__button">
                                    <img class="sv-thumb__button-icon" src="./assets/icons/page-services/icon-play.svg" alt="icon-play">
                                </div>
                                <div class="sv-thumb__img-wrapper">
                                    <img class="sv-thumb__img" src="./assets/img/service-page/page-video-thumb.jpg" alt="page-video-thumb">
                                </div>
                            </div>
                        </div>
                        <h3 class="service-videos__subtitle">Видео 1</h3>
                        <p class="service-videos__caption">Равным образом консультация с широким активом представляет собой интересный эксперимент проверки дальнейших направлений развития.</p>
                    </div>
                </div>
                <?php endfor; ?>
            </div>
        </div>
    </div>
</section>