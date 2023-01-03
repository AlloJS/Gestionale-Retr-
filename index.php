<?php 
  require_once($_SERVER['DOCUMENT_ROOT'] .'/require/require.php'); 
  require_once($_SERVER['DOCUMENT_ROOT'] .'/controller/homeController.php');
  require_once($_SERVER['DOCUMENT_ROOT'] .'/controller/update.php'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/style.css?ts=<?=time()?>&quot">
</head>
<body>
  <header>
    <?php include_once($_SERVER['DOCUMENT_ROOT'] . '/view/templates/navbar.php') ?>
  </header>
  <main>
  <?php include_once($_SERVER['DOCUMENT_ROOT'] . '/view/home.php') ?>
  </main>
  <footer>

  </footer>


  <script src="js/script.js"></script>
</body>
</html>