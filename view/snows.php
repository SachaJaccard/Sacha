<?php
/**
 * Created by PhpStorm.
 * User: Pascal.BENZONANA
 * Date: 08.05.2017
 * Time: 09:16
 */

// tampon de flux stocké en mémoire
ob_start();
$title="RentASnow - Snows";
?>

    <div class="span12" id="divMain">
        <h1>HAAAA !!! T'es dans snows</h1>

        <a href="index.php?action=home">Retourner à l'accueil</a>


<?php
$content = ob_get_clean();
require "gabarit.php";