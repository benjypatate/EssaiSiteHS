<?php
    if (empty($sousmenucompte)){
        $entete = entete("Mon site / Mes Messages");
        $menu = menu("moncompte");
        $sousmenu = sousmenucompte("mesmess");
        $contenu = "<h2>Contenu de mes messages</h2>";
        $pied = pied();
    }

    include 'gabarit.php';
?>