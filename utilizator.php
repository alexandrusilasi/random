<?php

require './inc/cont.inc.php';

//print_r($_POST);

$cont = new Cont($_POST['nume'] , $_POST['email'] , $_POST['parola']);

echo $cont -> acc_check();