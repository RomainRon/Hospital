<?php

require_once "connexion.php";

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
  <h1 class="d-flex justify-content-center">RDV</h1>
  <form class="row g-3">
    <div class="container">
      <div class="col-md-4">
        <label for="validationDefault01" class="form-label">First name</label>
        <input type="text" class="form-control" id="validationDefault01" required>
      </div>
      <div class="col-md-4">
        <label for="validationDefault02" class="form-label">Last name</label>
        <input type="text" class="form-control" id="validationDefault02" required>
      </div>
      <div class="col-md-4">
        <label for="validationDefaultUsername" class="form-label">Mail</label>
        <div class="input-group">
          <span class="input-group-text" id="inputGroupPrepend2">@</span>
          <input type="text" class="form-control" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" required>
        </div>
      </div>

      <div class="col-md-3">
        <label for="validationDefault04" class="form-label">Phone</label>
        <select class="form-control" id="validationDefault04" required>


        </select>
      </div>
      <div class="col-md-3">
        <label for="validationDefault05" class="form-label">BirthDate</label>
        <input type="text" class="form-control" id="validationDefault05" required>
      </div>
      <div class="col-12">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
          <label class="form-check-label" for="invalidCheck2">
            Agree to terms and conditions
          </label>
        </div>
      </div>
      <div class="col-12">
        <button class="btn btn-primary" type="submit">Envoyé</button>
      </div>
    </div>



</body>

</html>