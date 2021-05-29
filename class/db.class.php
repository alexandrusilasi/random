<?php

class Db
{
    private $hostdb = 'localhost';
    private $namedb = 'random';
    private $userdb = 'root';
    private $passdb = '';

    public function conn()
    {
        $sql = "mysql:host=".$this -> hostdb.";dbname=".$this ->namedb;
        try {
            $dbh = new PDO($sql, $this -> userdb, $this -> passdb);
        }
        catch(PDOException $e) {
            echo $e->getMessage();
        }

        return $dbh;
    }

}