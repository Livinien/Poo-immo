<!-- page_logement -->


 <!-- PARTIE DJEBBAR-->
<!-- page_logement -->


<?= require "common/header2.php"; ?>
<?php 
ob_start();?>






<?php
    $titre="client";
    //$content = "coucou"; 
    $content=ob_get_clean();
    require "common/template2.php";
   
    ?>
    
<?= require "common/footer.php"; ?>
