<?php 
  require_once('header-dark.php');
  require_once('heading.php');
  require_once('marks.php');
  require_once('cta.php');
  require_once('footer.php');
  require_once('modal.php');
  require_once('modal-success.php');
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

  <?php 
  the_header_dark(); 
  $headingParams = array(
    'title' => 'Собственные торговые марки',
    'show_image' => true,
    'show_bg' => false
  );
  heading($headingParams); 
  marks(); 
  cta(); 
  footer(); 
  modal(); 
  modal_success(); 
  ?>
  
  <script src="./js/swiper-bundle.min.js"></script>
  <script src="./js/main.js"></script>
</body>

</html>