<?php
require_once '../core/Router.php';
require_once '../controllers/HomeController.php';
require_once '../controllers/AuthController.php';
require_once '../controllers/SearchController.php';
require_once '../controllers/ProfileController.php';

$router = new Router();

// Définir les routes
$router->addRoute('/ECF_mvc/code/public/index.php?home', new HomeController());
$router->addRoute('/ECF_mvc/code/public/index.php?login', new AuthController('login'));
$router->addRoute('/ECF_mvc/code/public/index.php?register', new AuthController('register'));
$router->addRoute('/ECF_mvc/code/public/index.php?search', new SearchController());
$router->addRoute('/ECF_mvc/code/public/index.php?profile', new ProfileController());

// Gérer la requête
$uri = $_SERVER['REQUEST_URI'];
$router->handleRequest($uri);