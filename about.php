<?php 
  require_once('footer.php');
?>
<?php 
  require_once('cta.php');
?>
<?php 
  require_once('clients.php');
?>
<?php 
  require_once('founder.php');
?>
<?php 
  require_once('heading.php');
?>
<?php 
  require_once('header-dark.php');
?>

<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/swiper-bundle.min.css">
  <link rel="stylesheet" href="./css/reset.css">
  <link rel="stylesheet" href="./css/style.css?v=1">
  <title>О компании - Aliance Production</title>
</head>

<body>
  <?php the_header_dark(); ?>
  <!-- header -->
  <?php heading(); ?>
  <!-- page-heading -->
  <?php founder(); ?>
  <!-- ./section founder -->
  <?php clients(); ?>
  <!-- /.clients -->
  <?php cta(); ?>
  <!-- /.section calltoaction -->
  <?php footer(); ?>
  <!-- /.footer -->
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
  <!-- /.modal -->
  <script src="./js/swiper-bundle.min.js"></script>
  <script src="./js/main.js"></script>
</body>

</html>