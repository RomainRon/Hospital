<?php

require "connexion.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <title>Hospital</title>
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
  <h1 class="d-flex justify-content-center">Accueil</h1>

  <div class="d-flex justify-content-center">

    <img src="https://cdn-europe1.lanmedia.fr/var/europe1/storage/images/europe1/sante/vosges-lhopital-de-remiremont-suspend-son-activite-chirurgicale-apres-un-nouveau-deces-suspect-4207460/60674524-1-fre-FR/Vosges-l-hopital-de-Remiremont-suspend-son-activite-chirurgicale-apres-un-nouveau-deces-suspect.jpg" alt="" srcset="" width=100%>

  </div>

</body>

</html>