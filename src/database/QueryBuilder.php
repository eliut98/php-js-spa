<?php

class QueryBuilder
{
    protected $conn;
    public function __construct(PDO $conn)
    {
        $this->conn = $conn;
    }
    public function getAll($table)
    {
        $stmt = $this->conn->prepare("SELECT * from $table");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
}
