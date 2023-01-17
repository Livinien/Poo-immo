  <!-- HEADER - NAVBAR -->

 
<body>
      <header>
      <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../public/assets/css/app.css">

 
<nav class="navbar navbar-dark bg-dark fixed-top">
              <div class="container-fluid">
                  <a class="navbar-brand text-light fw-bold p-3" href="agence.php">IMMOBELLO</a>
                  <button class="navbar-toggler border-light" type="button" data-bs-toggle="offcanvas"
                      data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                      <span class="navbar-toggler-icon"></span>
                  </button>

                  <div class="offcanvas offcanvas-end bg-dark" tabindex="-1" id="offcanvasNavbar"
                      aria-labelledby="offcanvasNavbarLabel">
                      <div class="offcanvas-header text-light">
                          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">IMMOBELLO</h5>
                          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                              aria-label="Close"></button>
                      </div>

                      <div class="offcanvas-body">
                          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                              <li class="nav-item">
                                  <a class="nav-link active text-light fw-bold" aria-current="page"
                                      href="agence.php">Accueil</a>
                              </li>

                              <li class="nav-item">
                                  <a class="nav-link active text-light fw-bold" aria-current="page"
                                      href="inscription_front.view.php">Inscription</a>
                              </li>
                              <li class="nav-item active">
                                <?= $content ?>
                             </li>
                          </ul>
                      </div>
                  </div>
              </div>
          </nav>
      </header>




          