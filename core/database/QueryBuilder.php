<?php

class QueryBuilder 
{
    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table,$intoClass = null){
        $stat = $this->pdo->prepare("select * from {$table}");
        $stat->execute();
        if ($intoClass){
            return $stat->fetchAll(PDO::FETCH_CLASS,$intoClass);
        } else {
            return $stat->fetchAll(PDO::FETCH_CLASS);
        }

    }
}