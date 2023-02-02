<?php 
  require_once('./components/header-dark.php');
  require_once('./components/heading.php');
  require_once('./components/steps.php');
  require_once('./components/clients.php');
  require_once('./components/cta.php');
  require_once('./components/footer.php');
  require_once('./components/modal.php');
  require_once('./components/modal-success.php');
?>

<!DOCTYPE html>
<html lang="ru">

<?php $title = 'Автомобильная химия'; ?>
<?php require_once('./head.php'); ?>

<body>

  <?php  
  $headingParams = array(
    'title' => 'Автомобильная химия',
    'show_image' => rtue,
  );
  the_header_dark(); 
  heading($headingParams); 
  steps(); 
  clients(); 
  cta(); 
  footer(); 
  modal(); 
  modal_success(); 
  ?>
  
  <?php require_once('./scripts.php'); ?>
</body>

</html>