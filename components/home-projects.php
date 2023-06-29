<?php 
    $projects = array(
        array('location' => 'Республика Татарстан, 2020 г.', 'image' => './assets/img/projects/tatarstan-2020.jpg'),
        array('location' => 'Республика Татарстан, 2020 г.', 'image' => './assets/img/projects/tatarstan-2020-2.jpg'),
        array('location' => 'Владимирская область, 2018 г.', 'image' => './assets/img/projects/vladimirskaya-2018.png'),
        array('location' => 'Мурманская область, 2017 г.', 'image' => './assets/img/projects/murmanskaya-2017.jpg'),
        array('location' => 'Ярославская область, 2016 г.', 'image' => './assets/img/projects/yaroslavskaya-2016.jpg'),
        array('location' => 'Республика Татарстан, 2015 г.', 'image' => './assets/img/projects/tatarstan-2015.jpg'),
        array('location' => 'Ярославская область, 2014 г.', 'image' => './assets/img/projects/yaroslavskaya-2014.jpg'),
        array('location' => 'Ярославская область, 2013 г.', 'image' => './assets/img/projects/yaroslavskaya-2013.jpg'),
        array('location' => 'Нижегородская область, 2018 г.', 'image' => './assets/img/projects/nizhegorodskaya-2018.jpg'),
        array('location' => 'г. Казань, 2015 г.', 'image' => './assets/img/projects/kazan-2015.jpg'),
    )
?>
<section class="mp-projects">
    <div class="mp-projects__container">
        <div class="mp-projects__wrapper">
            <h1 class="mp-projects__title">Наши проекты</h1>
            <?php /* <p class="mp-projects__subtitle">В нашей команде работают специалисты исключительно с опытом работы более пяти лет, профильным образованием, допусками на высотные и узкоспециализированные работы.</p> */ ?>
            <div class="mp-project-list">
                <?php
                    $count = 0;
                    foreach ($projects as $project) :
                    $count++;
                ?>
                <div class="mp-project-list__col <?php if (in_array($count, array(1,2,6,10))) : echo 'mp-project-list_lg-col'; endif;?>">
                    <?php if (in_array($count, array(2, 6))): ?>
                        <div class="mp-project-list mp-project-list_sm">
                            <div class="mp-project-list__col">
                    <?php endif; ?>
                    <a href="#!" class="mp-project-item">
                        <div class="mp-project-item__image-wrapper">
                            <picture>
                                <img src="<?php echo $project['image']; ?>" alt="projects 01" class="mp-project-item__image">
                            </picture>
                        </div>
                        <div class="mp-project-item__location">
                            <div class="mp-project-item__icon-wrapper">
                                <img src="./assets/icons/icon-location.svg" alt="location icon" class="mp-project-item__location-icon">
                            </div>
                            <span class="mp-project-item__text"><?php echo $project['location']; ?></span>
                        </div>
                    </a>
                    <?php if (in_array($count, array(5, 9))): ?>
                    </div></div>
                    <?php endif; ?>
                </div>
                <?php endforeach; ?>
            </div>
            <div class="mp-projects__button">
                <a href="#!" class="mp-button mp-button_default">Смотреть все проекты</a>
            </div>
        </div>
    </div>
</section>