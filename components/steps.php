<?php function steps() { ?>
  <section class="section steps section-light">
    <div class="container">
      <div class="steps-content">
        <div class="seporaiter"></div>
        <h2 class="section-title">схема работы</h2>
        <!-- Основной слайдер -->
        <div class="swiper swiper-step">
          <!-- Обертка слайдера -->
          <ul class="swiper-wrapper">
            <!-- Слайды -->
            <li class="steps-item swiper-slide">
              <span class="steps-num">01</span>
              <h3 class="steps-title">Знакомство</h3>
              <p class="steps-text">
                Безусловно, сплочённость команды профессионалов позволяет оценить
                значение форм воздействия.
              </p>
              <a class="button-link steps-link js-open-modal" data-modal-class="modal-cta">Оставить заявку</a>
            </li>
            <li class="steps-item swiper-slide">
              <span class="steps-num">02</span>
              <h3 class="steps-title">Заключение <br> договора</h3>
              <p class="steps-text">
                Лишь интерактивные прототипы призваны к ответу.
              </p>
            </li>
            <li class="steps-item swiper-slide">
              <span class="steps-num">03</span>
              <h3 class="steps-title">Производство</h3>
              <p class="steps-text">
                А также стремящиеся вытеснить традиционное производство,
                нанотехнологии функционально разнесены на независимые <br> элементы.
              </p>
            </li>
            <li class="steps-item swiper-slide">
              <span class="steps-num">04</span>
              <h3 class="steps-title">Доставка</h3>
              <p class="steps-text">
                В частности, экономическая повестка сегодняшнего дня говорит о
                возможностях приоритизации <br> разума над эмоциями.
              </p>
            </li>
          </ul>
          <!-- Кнопки навигации вперед\назад -->
          <div class="slider-buttons slider-buttons-hidden ">
            <div class="slider-step-button-prev slider-button-prev">
              <svg class="arrow-slider">
                <use href="./img/sprite.svg#arrow-prev"></use>
              </svg>
            </div>
            <div class="slider-step-button-next slider-button-next">
              <svg class="arrow-slider">
                <use href="./img/sprite.svg#arrow-next"></use>
              </svg>
            </div>
          </div>
        </div>
        <!-- steps-content  -->
      </div>
    </div>
    <!-- /.container -->
  </section>
<?php } ?>