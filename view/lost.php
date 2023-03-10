<?php


// tampon de flux stocké en mémoire
ob_start();
$title="RentASnow - Perdu";
?>

    <div class="span12" id="divMain">
        <h1>Oupssss... vous vous êtes perdu ;(</h1>

        <a href="../index.php?action=home">Retourner à l'accueil</a>


<?php
$content = ob_get_clean();
require "gabarit.php";
