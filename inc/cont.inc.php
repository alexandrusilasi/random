<?php

require './class/db.class.php';

class Cont extends Db
{
    private $nume;
    private $email;
    private $parola;

    public function __construct($nume, $email, $parola)
    {
        $this -> nume = $nume;
        $this -> email = $email;
        $this -> parola = md5($parola);
    }

    private function create_acc()
    {
        $acc = md5($this -> email);
        $data = strtotime(date("d.m.Y H:i:s"));
        $sql = "INSERT INTO utilizatori(nume, email, parola, data_inregistrarii, activat, ac_key) VALUES('".$this -> nume."' , '".$this -> email."' , '".$this -> parola."' , '$data' , 0 , '$acc')";
        $insert = $this -> conn() -> exec($sql);
        echo ($insert) ? "Cont creat": print_r($this -> conn() -> errorInfo());
    }
    
    public function acc_check()
    {
        $sql = "SELECT * FROM utilizatori WHERE email = '".$this -> email."' AND parola = '".$this -> parola."'";
        $check = $this -> conn() -> query($sql);
        if($check)
        {
            $count = $check -> rowCount();
            echo ($count) ? "Cont existent" : $this -> create_acc();
        }
    }
    public function afisare()
    {
        $sql = "SELECT * FROM utilizatori";
        $users = $this -> conn() -> query($sql);
        if($users)
        {
            $i = 0;
            $count = $users -> rowCount();
            if(!$count)
                echo "Nu exista utilizatori!";
            else
            {
                foreach($users as $row)
                {
                    $res[$i]['id'] = $row['ID'];
                    $res[$i]['nume'] = $row['nume'];
                    $i++;
                }
                return $res;
            }
        }
    }
}