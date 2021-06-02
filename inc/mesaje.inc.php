<?php

session_start();

if(empty($_POST['mesaj']))
{
    echo "Va rugam scrieti un mesaj!";
    exit;
}

require '../class/mesaje.class.php';

$insert = new Mesaje($_SESSION['id_utilizator'] , $_POST['dest'] , $_POST['mesaj']);

echo $insert -> insert();

?>