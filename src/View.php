<?php

abstract class View
{
    public static function to($view, $data = null)
    {
        if (isset($data)) {
            foreach ($data as $key => $value) $$key = $value;
        }
        require_once $_SERVER['DOCUMENT_ROOT'] . "/views/$view.php";
    }
}
