
    <!DOCTYPE html>
<html lang="fr">
<body>
      <header>
      <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../public/assets/css/app.css">




    
    <!-- CARROUSEL -->

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators" carousel-item active data-bs-interval="100">
            <button type=" button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
                aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4"
                aria-label="Slide 1"></button>
        </div>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../public/assets/images/Villa_de_luxe.jpg" class="contain d-block w-100"
                    alt="Images de logements">
                <div class="carousel-caption carousel d-none d-md-block">
                    <h2>Villa de Luxe</h2>
                    <p class="carousel-subtitle">Villa en face de la mer avec vue depuis la piscine.</p>
                </div>
            </div>

            <div class="carousel-item">
                <img src="../public/assets/images/Villa_sur_la_cote.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h2>Villa sur la C??te</h2>
                    <p class="carousel-subtitle">Villa en face de la mer avec vue depuis la piscine.</p>
                </div>
            </div>

            <div class="carousel-item">
                <img src="../public/assets/images/Maison_du_lac.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h2>Maison du Lac</h2>
                    <p class="carousel-subtitle">Villa en face de la mer avec vue depuis la piscine.</p>
                </div>
            </div>

            <div class="carousel-item">
                <img src="../public/assets/images/Maison_Addams.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h2>Maison Addams</h2>
                    <p class="carousel-subtitle">Villa en face de la mer avec vue depuis la piscine.</p>
                </div>
            </div>
        </div>


        <!-- BOUTON SUIVANT ET PRECEDENT -->

        <button class="carousel-control-prev carousel-icon" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>


    
<!-- CARTE DES LOGEMENTS -->
  
<div class="container text-center g-0">
        <h2 class="logements mt-5">Nos Logements</h2>
        <div class="row row-cols-1 row-cols-xl-4 row-cols-md-4">
            <div class="col mb-5">
                <div class="card mt-5">
                    <img src="../public/assets/images/Villa_sur_la_cote.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h2 class="card-title">Villa sur la C??te</h2>
                        <h4 class="card-subtitle mt-3">Marseille, FRANCE</h4>
                        <h4 class="card-subtitle mt-3 mb-3">700 000 ???</h4>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mt-5">
                    <img src="../public/assets/images/Villa_de_luxe.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h2 class="card-title">Villa sur la C??te</h2>
                        <h4 class="card-subtitle mt-3">Marseille, FRANCE</h4>
                        <h4 class="card-subtitle mt-3 mb-3">700 000 ???</h4>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mt-5">
                    <img src="../public/assets/images/Maison_du_lac.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h2 class="card-title">Villa sur la C??te</h2>
                        <h4 class="card-subtitle mt-3">Marseille, FRANCE</h4>
                        <h4 class="card-subtitle mt-3 mb-3">700 000 ???</h4>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mt-5 mb-5">
                    <img src="../public/assets/images/Manoir_du_duc.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h2 class="card-title">Villa sur la C??te</h2>
                        <h4 class="card-subtitle mt-3">Marseille, FRANCE</h4>
                        <h4 class="card-subtitle mt-3 mb-3">700 000 ???</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>