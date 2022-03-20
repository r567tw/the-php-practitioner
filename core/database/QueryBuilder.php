<?php
namespace App\Core\Database;

class QueryBuilder 
{
    protected $pdo;

    public function __construct(\PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table,$intoClass = null){
        $stat = $this->pdo->prepare("select * from {$table}");
        $stat->execute();
        if ($intoClass){
            return $stat->fetchAll(\PDO::FETCH_CLASS,$intoClass);
        } else {
            return $stat->fetchAll(\PDO::FETCH_CLASS);
        }

    }

    public function insert($table , $params)
    {
        $sql = sprintf("insert into %s (%s) values (%s)", 
            $table, 
            implode(',', array_keys($params)), 
            ':'.implode(', :',array_keys($params))
        );

        try {
            $stat = $this->pdo->prepare($sql);
            $stat->execute($params);
        } catch (\PDOException $e) {
            die('Somethin went wrong');
        }

    }
}