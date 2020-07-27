<?php
        include 'head.php';
    ?>

    <!-- On inclut la barre de navigation -->
    
    <h1>Titre de la page</h1>
    <?php
        include 'inc/nav.php';
        include_once ('inc/nav.php');
        
    ?>
    <?= "<p>Bonjour $prenom</p>"  ?>
    <?php
        include 'footer.php';
    ?>
    