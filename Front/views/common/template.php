<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= $page_description; ?>">

    <title><?= $page_title; ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <?php if(!empty($page_css)) : ?>
    <?php foreach($page_css as $fichier_css) : ?>
    <link href="<?= URL ?>public/CSS/<?= $fichier_css ?>" rel="stylesheet" />
    <?php endforeach; ?>
    <?php endif; ?>

</head>

<body>
    <?php require_once("views/common/header.php"); ?>

    <div class="container">
        <?php 
            if(!empty($_SESSION['alert'])) {
                foreach($_SESSION['alert'] as $alert){
                    echo "<div class='alert ". $alert['type'] ."' role='alert'>
                        ".$alert['message']."
                    </div>";
                }
                unset($_SESSION['alert']);
            }
        ?>
        <?= $page_content; ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>



    <?php if(!empty($page_javascript)) : ?>
    <?php foreach($page_javascript as $fichier_javascript) : ?>
    <script src="<?= URL?>public/JavaScript/<?= $fichier_javascript ?>"></script>
    <?php endforeach; ?>
    <?php endif; ?>
</body>

</html>