<?php
class DB
{
    protected static $table;
    protected static $statement;
    protected $input;

    public static function table($name)
    {
        static::$table = $name;
        return new DB;
    }

    public function where($dbcolumn, $sign = '=', $input)
    {
        static::$statement = App::get('database')->selectWhere(static::$table, $dbcolumn, $sign);
        $this->input = $input;
        return $this;
    }

    public function get()
    {
        if (!static::$statement) {
            $statement = App::get('database')->selectAll(static::$table);
            $statement->execute();
            return $statement->fetchAll(PDO::FETCH_OBJ);
        }
        static::$statement->execute([$this->input]);
        return static::$statement->fetchAll(PDO::FETCH_OBJ);
    }

    public function first()
    {
        static::$statement->execute([$this->input]);
        return static::$statement->fetch(PDO::FETCH_OBJ);
    }

    public function all()
    {
        $statement = App::get('database')->selectAll(static::$table);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_OBJ);
    }
}