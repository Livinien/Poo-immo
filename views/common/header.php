<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?= URL ?>public/assets/css/app.css" rel="stylesheet" />

    <title><?= $page_title; ?></title>

</head>


<header>
    <nav class="navbar navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand text-light fw-bold p-3" href="<?= URL; ?>accueil">IMMOBELLO</a>

            <button class="navbar-toggler border-light" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <?php require_once("views/common/menu.php"); ?>
</header>