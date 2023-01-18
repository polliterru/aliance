<?php function modal() { ?>
  <div class="modal">
    <div class="modal-dialog">
      <h2 class="modal-title">Есть вопросы?</h2>
      <button class="modal-close" data-toggle="modal">
        <svg class="modal-close-button">
          <use href="./img/sprite.svg#modal-close"></use>
        </svg>
      </button>
      <p class="modal-text">
        Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время ответит на все интересующие
        вопросы и поможем даже в самых сложных случаях!
      </p>
      <form action="#" class="modal-form">
        <div class="input-group-wrapper modal-input-group-wrapper">
          <div class="input-group modal-input-group">
            <input id="modal-user-name" type="text" class="input modal-input">
            <label class="input-group-label bg-light-gray" for="modal-user-name">Имя</label>
          </div>
          <div class="input-group modal-input-group">
            <input id="modal-user-phone" type="tel" class="input modal-input">
            <label class="input-group-label bg-light-gray" for="modal-user-phone">Номер телефона</label>
          </div>
        </div>
        <!-- /.input-group-wrapper -->
        <div class="cta-form-footer modal-form-footer">
          <button type="submit" class="button cta-form-button modal-form-button">Оставить заявку</button>
          <div class="notify">
            <svg class="notify-icon">
              <use href="./img/sprite.svg#notify"></use>
            </svg>
            <p class="notify-text modal-form-footer-text">
              Обращаясь к нам вы получаете не только профессиональную работу, но и абсолютную конфиденциальность
              информации!
            </p>
          </div>
        </div>
        <!-- /.cta-form-footer -->
      </form>
    </div>
    <!-- modal-dialog -->
  </div>
<?php } ?>