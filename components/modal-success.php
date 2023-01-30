<?php function modal_success() { ?>
  <div class="modal modal-success">
    <div class="modal-overlay js-close-modal"></div>
    <div class="modal-dialog">
      <button class="modal-close js-close-modal">
        <svg class="modal-close-button">
          <use href="./img/sprite.svg#modal-close"></use>
        </svg>
      </button>
      <picture class="modal-success-img">
        <source type="image/webp" srcset="img/thanks_illu.webp">
        <source type="image/jpg" srcset="img/thanks_illu.png">
        <img src="./img/thanks_illu.png" alt="успешно" class="modal-success-img">
      </picture>
      <h2 class="modal-title">Спасибо за заявку!</h2>
      <p class="modal-text">
        Наш менеджер свяжется с Вами в ближайшее время ответит на все интересующие вопросы и поможем даже в самых сложных случаях!
      </p>
      <a href="/" class="modal-success-form-button button cta-form-button modal-form-button">Вернуться на главную</a>
    </div>
    <!-- modal-dialog -->
  </div>
<?php } ?>