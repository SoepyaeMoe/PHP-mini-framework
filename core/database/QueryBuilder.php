<?php

class QueryBuilder
{
    protected $pdo;
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table)
    {
        $statement = $this->pdo->prepare("select * from  $table");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_OBJ);
    }

    public function insert($dataArr, $table)
    {
        $col = implode(',', array_keys($dataArr));
        $questionMark = "";
        foreach ($dataArr as $data) {
            $questionMark .= '?,';
        }
        $questionMark = rtrim($questionMark, ",");
        $sql = "insert into $table ($col) values ($questionMark)";
        $statement = $this->pdo->prepare($sql);

        $value = array_values($dataArr);
        $statement->execute($value);
    }
}
