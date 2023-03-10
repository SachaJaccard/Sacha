<?php
function snows() {
    require "model/dbConnector.php";
    $snows = executeQuerySelect("SELECT * FROM snows");
    require "view/snows.php";
}
