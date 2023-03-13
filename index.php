<?php
session_start();
require "controller/navigation.php";
require "controller/controller_snows.php";
if (isset($_GET['action'])) {
    $action = $_GET['action'];
    switch ($action) {
        case 'snows' :
            snows();
            break;
        case 'home' :
            home();
            break;
        default :
            lost();
    }
}
else {
    if (isset($_GET['receive'])) {
        $receive = $_GET['receive'];
        Snow($receive);
    } else home();
}