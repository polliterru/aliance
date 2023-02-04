<?php 
  require_once('./components/header-dark.php');
  require_once('./components/heading.php');
  require_once('./components/product.php');
  require_once('./components/text_block.php');
  require_once('./components/cta.php');
  require_once('./components/footer.php');
  require_once('./components/modal.php');
  require_once('./components/modal-success.php');
?>

<!DOCTYPE html>
<html lang="ru">

<?php $title = 'Aliance - Контрактное производство'; ?>
<?php require_once('./head.php'); ?>

<body>

  <?php 
  the_header_dark(); 

  $headingParams = array(
    'title' => 'Контрактное производство',
    'show_image' => false,
    'show_bg' => false
  );
  heading($headingParams); 
  product(); 
  text_block(); 
  cta(); 
  footer(); 
  modal(); 
  modal_success(); 
  ?>
  
  <?php require_once('./scripts.php'); ?>
</body>

</html>