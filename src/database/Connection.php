<?php

class Connection
{
    public static function make($config)
    {
        try {
            $host = $config['host'];
            $database = $config['database']['name'];
            $username = $config['database']['username'];
            $password = $config['database']['password'];
            $conn = new PDO("mysql:host=$host;dbname=$database", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}
