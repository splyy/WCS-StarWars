<?php

require "../config/Connexion.php";
require "../src/BddManager.php";
require "../src/JediManager.php";

$page = ( isset($_GET['page']) ? $_GET['page'] : 'index' );
$page = $page . ".php";

$bdd = new \wcs\BddManager();
$jediManager = new \wcs\JediManager($bdd);

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title><?php
      switch ($page){
          case "index.php":
              echo "StarWars - Accueil";
              break;
          case "list.php":
              echo "StarWars - Liste";
              break;
          case "form.php":
              echo "StarWars - Formulaire";
              break;
      }
      ?></title>
  <link rel="stylesheet" href="css/stylesheet.css">
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
</head>

<body>

<?php include "../inc/header.php"; ?>

<div class="container">
    <?php include "../page/$page"; ?>
</div>

<footer class="footer">
    <?php include "../inc/footer.php"; ?>
</footer>

<script src="https://code.jquery.com/jquery-3.2.0.js" integrity="sha256-wPFJNIFlVY49B+CuAIrDr932XSb6Jk3J1M22M3E2ylQ=" crossorigin="anonymous"></script>
<script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
<?php if ($page == "list.php"): ?>
    <script src="js/list.js"></script>
<?php endif; ?>

</body>
</html>
