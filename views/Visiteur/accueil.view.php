<!-- MESSAGE DE SUCCES A LA CONNEXION AU COMPTE -->

<div class="mt-4 fw-bold">
    <?php 
        if(!empty($_SESSION['alert'])) {
            foreach($_SESSION['alert'] as $alert){
                echo "<div class='alert-success p-5' "."' role='alert'>
                    ".$alert['message']."
                </div>";
            }
            unset($_SESSION['alert']);
        }
    ?>

</div>


<h1 class="p-5">Coucou</h1>