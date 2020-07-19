<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/src/View.php';

View::to('about', [
    'title' => "Contact",
    "desc" => 'This is the contact page'
]);