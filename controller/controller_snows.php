<?php

function snows()
{
    require "model/model.php";

    $snows=getSnows();

    require "view/snows.php";
}
function Snow($id)
{
    require "model/model.php";

    $snows=getSnow($id);

    require "view/snow.php";
}