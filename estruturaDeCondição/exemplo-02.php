<?php

$diaDaSemana =  8;//date("w");

// echo $diaDaSemana;

switch ($diaDaSemana) {
    case 0: 
        echo "domingo";
        break;
    
    case 1:
        echo " segunda-feira";
        break;
    
    case 2:
        echo "terça-feira";
        break;
    
    case 3:
        echo "quarta-feira";
        break;

    case 4:
        echo "quinta-feira";
        break;
    
    case 5:
        echo "sexta-feira";
        break;
    
    case 6:
        echo "sabado";
    
    default:
        echo "Data invalidade";
    break;
        
}

?>