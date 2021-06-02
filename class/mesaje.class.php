<?php

require './db.class.php';

class Mesaje extends Db
{
    private $exp;
    private $dest;
    private $mess;

    public function __construct($exp, $dest, $mess)
    {
        $this -> exp = $exp;
        $this -> dest = $dest;
        $this -> mess = $mess;
    }

    private function insert()
    {
        $data = strtotime(date("d.m.Y H:i"));
        $sql = "INSERT INTO mesaje(expeditor , destinatar, mesaj, data_trimitere, citit) VALUES('".$this -> exp."' , '".$this -> dest."' , '".$this -> mess."' , '$data' , 0)";
        $insert = $this -> conn() -> exec($sql);
        echo ($insert) ? "Mesaj trimis" : print_r($this -> conn() -> errorInfo());
    }
}