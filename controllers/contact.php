<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/src/View.php';

View::to('contact', [
    'title' => "Contact",
    "desc" => 'This is the contact page'
]);