<?php
    require_once('Router.php');
    require_once('controllers/juegoController.php');

    define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
    define("LOGIN", BASE_URL . 'login');

    $r = new Router();

    $r->addRoute("home", "GET", "JuegoController", "showHome");
    $r->addRoute("agregarJuego", "GET", "JuegoController", "AddGame");
    $r->addRoute("confirmarjuego", "POST", "JuegoController", "confirmarjuego");
    
    $r->setDefaultRoute("home", "GET", "JuegoController", "showHome");

    $r->route($_GET['action'], $_SERVER['REQUEST_METHOD']);
    
   