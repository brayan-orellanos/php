<?php 
$lenguaje = isset($_GET['lenguaje']) ? $_GET['lenguaje'] : 0;

switch ($lenguaje) {
    case '0':
        echo 'Buenos dias';
        break;
    case '1':
        echo 'Good day';
        break;
    case '2':
        echo 'Bon jour';
        break;      
}

