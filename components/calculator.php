<section class="mp-calculator" id="mpCalculator">
    <div class="mp-calculator__modal">
        <div class="mp-calculator__header">
            <div class="mp-calculator__title">Расчет стоимости проекта</div>
            <button class="mp-calculator__close" id="mpModalClose">
                <img class="mp-calculator__close-icon" src="./assets/icons/icon-close.svg" alt="icon close">
            </button>
        </div>
        <div class="mp-calculator__body">
            <form action="">
                <div class="mp-calculator__section">
                    <div class="mp-calculator__param">
                        <label class="mp-radio">
                            <input type="radio" checked="checked" name="Params1" value="ogz">
                            <span class="mp-radio__label">ОГЗ</span>
                            <span class="checkmark"></span>
                        </label>
                        <label class="mp-radio">
                            <input type="radio" checked="checked" name="Params1" value="fasad">
                            <span class="mp-radio__label">Фасад</span>
                            <span class="checkmark"></span>
                        </label>
                        <label class="mp-radio">
                            <input type="radio" checked="checked" name="Params1" value="metall">
                            <span class="mp-radio__label">Металл</span>
                            <span class="checkmark"></span>
                        </label>
                    </div>
                </div>
                <div class="mp-calculator__section">
                    <div class="mp-calculator__param">
                        <span>Проект (ОГЗ)</span>
                        <label class="mp-switch">
                            <input type="checkbox" name="" value="">
                            <span class="mp-switch__slider"></span>
                        </label>
                    </div>
                    <div class="mp-calculator__param">
                        <span>Сдача ИПЛ (МЧС)</span>
                        <label class="mp-switch">
                            <input type="checkbox" name="" value="">
                            <span class="mp-switch__slider"></span>
                        </label>
                    </div>
                </div>
                <div class="mp-calculator__section">
                    <div class="mp-calculator__param">
                        <span>Укрывание пленкой</span>
                        <label class="mp-switch">
                            <input type="checkbox" name="" value="">
                            <span class="mp-switch__slider"></span>
                        </label>
                    </div>
                    <div class="mp-calculator__param">
                        <span>Ручная очистка</span>
                        <label class="mp-switch">
                            <input type="checkbox" name="" value="">
                            <span class="mp-switch__slider"></span>
                        </label>
                    </div>
                    <div class="mp-calculator__param">
                        <span>Пескоструй</span>
                        <label class="mp-switch">
                            <input type="checkbox" name="" value="">
                            <span class="mp-switch__slider"></span>
                        </label>
                    </div>
                    <div class="mp-calculator__param">
                        <span>Огрунтовка</span>
                        <label class="mp-switch">
                            <input type="checkbox" name="" value="">
                            <span class="mp-switch__slider"></span>
                        </label>
                    </div>
                    <div class="mp-calculator__param">
                        <span>Частичная штукатурка</span>
                        <label class="mp-switch">
                            <input type="checkbox" name="" value="">
                            <span class="mp-switch__slider"></span>
                        </label>
                    </div>
                    <div class="mp-calculator__param">
                        <span>Гидроструй</span>
                        <label class="mp-switch">
                            <input type="checkbox" name="" value="">
                            <span class="mp-switch__slider"></span>
                        </label>
                    </div>
                </div>
                <div class="mp-calculator__section no-border">
                    <div class="mp-calculator__param">
                        <span>Покраска (АКЗ)</span>
                        <label class="mp-switch">
                            <input type="checkbox" name="" value="">
                            <span class="mp-switch__slider"></span>
                        </label>
                    </div>
                    <div class="mp-calculator__param">
                        <span>Слой (ОГЗ, мм)</span>
                        <input class="mp-input" type="number" name="" value="" placeholder="0">
                    </div>
                    <div class="mp-calculator__param">
                        <span>Высота (м)</span>
                        <input class="mp-input" type="number" name="" value="" placeholder="0">
                    </div>
                    <div class="mp-calculator__param">
                        <span>Объём (кв. м)</span>
                        <input class="mp-input" type="number" name="" value="" placeholder="0">
                    </div>
                    <div class="mp-calculator__param">
                        <span>Объём (т)</span>
                        <input class="mp-input" type="number" name="" value="" placeholder="0">
                    </div>
                </div>
                <div class="mp-calculator__total">
                    <div class="mp-calculator__param mb-0">
                        <div class="mp-calculator__amount">
                            <span>99 000 000</span>
                            <span>р.</span>
                        </div>
                        <div class="mp-calculator__nds">
                            <img class="mp-calculator__nds-icon" src="./assets/icons/icon-tick.svg" alt="icon tick">
                            <span>НДС</span>
                        </div>
                    </div>
                    <div class="mp-calculator__total-note">
                        <span>*предварительная стоимость</span>
                    </div>
                </div>
            </form>
        </div>
        <div class="mp-calculator__footer">
            <a href="#!" class="mp-button">
                <span>Отправить заявку</span>
            </a>
        </div>
    </div>
</section>