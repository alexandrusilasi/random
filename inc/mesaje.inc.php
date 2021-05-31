<?php

session_start();

if(empty($_POST['mesaj']))
{
    echo "Va rugam scrieti un mesaj!";
    exit;
}

echo $_SESSION['id_utilizator'];

?>