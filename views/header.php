<!DOCTYPE html>
<html lang="fr" ng-app="starShipApp">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/style.css">
      <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
      <title><?= $pageTitle ?></title>
  </head>
  <body>
          <!-- header -->
          <header>
            <div class="text-center">
              <!-- Début de la NavBar -->
              <nav class="navbar navbar-expand-sm navbar-light">
                <!-- Logo / titre du site -->

                  <span class="col-2">
                    <img class="logo" src="assets/img/logo4.png" alt="logo site">
                  </span>
                  <span class="col-2">
                  </span>
                  <span class="col-4">
                    <a class="navbar-brand font-weight-bold text-white logosize" href="#">Art'Way</a>
                  </span>
                  <span class="col-4">
                  </span>

              </nav>
              <nav class="navbar sticky-top navbar-dark">
                  <a href="?page=home" class="btn btn-outline-light m-1 col-12 col-md-6 col-lg-3">Accueil</a>
                  <a href="?page=users" class="btn btn-outline-light m-1 col-12 col-md-6 col-lg-3">France</a>
                  <a href="" class="btn btn-outline-light m-1 col-12 col-md-6 col-lg-3">Contact</a>
                    <form class="text-center form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Ville/Activité" aria-label="Search">
                        <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
                    </form>
              </nav>
              <div class="container-fluid text-center mt-3 presentation">
                <img src="assets/img/img2.jpeg" class="card-img-top imgPresentation" alt="bannière">
                <div class="card-body">
                  <h1 class="card-title h1pres">Art'Way</h1>
                  <h2 class="pres">Des Souvenirs porteurs d'Histoire</h2>
                  <p class="card-text pres">Art'Way croit en la rencontre avec le Savoir-Faire Artisanal et Artistique.</p>
                </div>
              </div>
          </header>