<?php function cta() { ?>
  <section class="section cta bg-gray">
    <div class="container cta-container">
      <picture class="cta-img">
        <source type="image/webp" srcset="img/spray.webp">
        <source type="image/jpg" srcset="img/spray.png">
        <img src="./img/spray.png" alt="call to action">
      </picture>
      <div class="cta-from-wrapper">
        <form action="./handler.php" method="POST" class="cta-form">
          <h2 class="section-title cta-form-title">
            Хотите сотрудничать?
          </h2>
          <p class="cta-form-text">
            Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время ответит на все
            интересующие вопросы и поможем даже в самых сложных случаях!
          </p>
          <div class="input-group-wrapper">
            <div class="input-group">
              <input id="user-name" type="text" class="input" name="username" placeholder=" " maxlength="30" required>
              <label class="input-group-label" for="user-name">Имя</label>
            </div>
            <div class="input-group">
              <input id="user-phone" type="tel" class="input" name="userphone" placeholder=" " maxlength="30" required>
              <label class="input-group-label" for="user-phone">Номер телефона</label>
            </div>
          </div>
          <!-- /.input-group-wrapper -->
          <div class="cta-form-footer">
            <button type="submit" class="button cta-form-button">Оставить заявку</button>
            <div class="notify">
              <svg class="notify-icon">
                <use href="./img/sprite.svg#notify"></use>
              </svg>
              <p class="notify-text">
                Обращаясь к нам вы получаете не только профессиональную работу, но и абсолютную конфиденциальность
                информации!
              </p>
            </div>
          </div>
          <!-- /.cta-form-footer -->
        </form>
      </div>
      <!-- /.cta-from-wrapper -->
    </div>
  </section>
<?php } ?>