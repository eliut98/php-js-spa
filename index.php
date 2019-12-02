<?php

require_once 'src/bootstrap.php';

$uri = Request::uri();

$view =  Router::load('routes.php')->to($uri);

Layout::setView($view);
