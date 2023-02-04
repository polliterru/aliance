<?php 
  require_once('./components/header-dark.php');
  require_once('./components/heading.php');
  require_once('./components/politics.php');
  require_once('./components/footer.php');
?>

<!DOCTYPE html>
<html lang="ru">

<?php $title = 'Aliance - Политика конфиденциальности'; ?>
<?php require_once('./head.php'); ?>

<body>

  <?php 
    $heading_params = array(
      'title' => 'Политика конфиденциальности',
      'show_image' => false,
    );
    the_header_dark();
    heading($heading_params);
    politics(); 
    footer(); 
  ?>
  
  <?php require_once('./scripts.php'); ?>
</body>

</html>