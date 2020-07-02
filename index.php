<?php

$rota = $_SERVER["REQUEST_URI"];

switch ($rota) {
    case "/";
        require "galeria.php";
        break;
    case "/novo";
        require "cadastro.php";
        break;
    default:
        require"404.php";
        break;
}
