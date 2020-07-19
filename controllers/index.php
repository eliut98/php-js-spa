<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/src/View.php';

View::to('home', [
    'title' => "Home",
    "lead" => 'Use this document as a way to quickly start any new project. <br/>
               All you get is this text and a mostly barebones HTML document.'
]);