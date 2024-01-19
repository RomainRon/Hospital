<?php

require "connexion.php"

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-primary">
    <a class="navbar-brand" href="index.php">Accueil</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-item nav-link active" href="ajout-patient.php">Ajout patient </a>
        <a class="nav-item nav-link active" href="listepatients.php">liste patients</a>
        <a class="nav-item nav-link active" href="rdv.php">Rdv</a>
        <a class="nav-item nav-link active" href="listederdv.php">Liste des rdv</a>
      </div>
    </div>
  </nav>

  <h1 class="d-flex justify-content-center">LISTE PATIENTS</h1>
  <?php
  $recipesStatement = $connexion->prepare('SELECT * FROM patients');
  ?>
  <?php
  $recipesStatement->execute();
  $recipes = $recipesStatement->fetchAll();




  // On affiche chaque patient un à un -->
  foreach ($recipes as $recipe) {
  ?>
    <div class="container bg-opacity-10">
      <div class="row text-center">

        <p id=liste class=" col-6 text-center p-3 bg-info bg-opacity-10 border border-secondary border-start-0 rounded-end">
          <?php echo $recipe['firstname'] . " "; ?>
          <?php echo $recipe['lastname'] . " - "; ?>
          <?php echo $recipe['birthdate'] . " - "; ?>
          <?php echo $recipe['phone'] . " - "; ?>
        <?php echo $recipe['mail'];
      } ?></p>

</body>

</html>