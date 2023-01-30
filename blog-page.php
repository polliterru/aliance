<?php 
  require_once('./components/header-dark.php');
  require_once('./components/heading.php');
  require_once('./components/blog.php');
  require_once('./components/cta.php');
  require_once('./components/footer.php');
  require_once('./components/modal.php');
  require_once('./components/modal-success.php');
?>

<!DOCTYPE html>
<html lang="ru">

<?php $title = 'Блог'; ?>
<?php require_once('./head.php'); ?>

<body>

  <?php 
  the_header_dark(); 
  $headingParams = array(
    'title' => 'Блог',
    'show_image' => false,
    'show_bg' => true
  );
  heading($headingParams); 
  blog();
  cta(); 
  footer(); 
  modal(); 
  modal_success(); 
  ?>
  
  <?php require_once('./scripts.php'); ?>
</body>

</html>