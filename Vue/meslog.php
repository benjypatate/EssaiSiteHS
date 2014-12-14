<?php
    if (empty($sousmenucompte)){
        $entete = entete("Mon site / Mes Logements");
        $menu = menu("moncompte");
        $sousmenu = sousmenucompte("meslog");
        $contenu = "<h2>Mes logements</h2><br /><a href='index.php?cible=inscrlog'>Ajouter un nouveau logement</a>";
        $pied = pied();
    }

    include 'gabarit.php';
?>