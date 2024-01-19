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
        <a class="nav-item nav-link active" href="ajout-patient.php">Ajout patients</a>
        <a class="nav-item nav-link active" href="listepatients.php">Liste patients</a>
        <a class="nav-item nav-link active" href="rdv.php">Rdv</a>
        <a class="nav-item nav-link active" href="listederdv.php">Liste des rdv</a>
      </div>
    </div>
  </nav>
  <h1 class="d-flex justify-content-center">AJOUT PATIENT</h1>

  <h2>Ajoute patient</h2>

  <ul>
    <form action="ajoutpatient2.php" method="post">

      <li>
        <input type="text" placeholder="firstname" name="firstname">
      </li> <br>
      <li>
        <input type="text" placeholder="lastname" name="lastname">
      </li> <br>
      <li>
        <input type="date" placeholder="birthdate" name="birthdate">
      </li> <br>
      <li>
        <input type="text" placeholder="phone" name="phone">
      </li> <br>
      <li>
        <input type="text" placeholder="mail" name="mail">
      </li> <br>
      <button type="submit">Enregister</button>
    </form>

  </ul>

</body>

</html>