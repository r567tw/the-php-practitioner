<?php

class QueryBuilder 
{
    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table,$intoClass){
        $stat = $this->pdo->prepare("select * from {$table}");
        $stat->execute();
        return $stat->fetchAll(PDO::FETCH_CLASS,$intoClass);

    }
}