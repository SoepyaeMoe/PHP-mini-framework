<?php

class Connection
{
    public static function make($config)
    {
        $username = $config['username'];
        $password = $config['password'];
        try {
            return new PDO(
                "{$config['host']}; dbname={$config['dbname']}",
                $username,
                $password
            );
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}