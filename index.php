<?php

require_once 'src/bootstrap.php';

$routes = require 'routes.php';

$uri = $_SERVER['REQUEST_URI'];

$view = Router::load($routes)::to($uri);

Layout::setView($view);