<?php

// Escreva uma função que receba um número e exiba o dia correspondente da semana. (1-Domingo, 2- Segunda, etc.), se digitar outro valor deve aparecer valor inválido.

function diaDaSemana()
{

    $dia = func_get_args();

    switch ($dia) {
        case 1:

            echo "Domingo";

            break;
        case 2:

            echo "Segunda-feira";

            break;
        case 3:

            echo "Terça-feira";

            break;
        case 4:

            echo "Quarta-feira";

            break;
        case 5:

            echo "Quinta-feira";

            break;
        case 6:

            echo "Sexta-feira";

            break;
        case 7:

            echo "Sábado";

            break;
        default:

            echo "Numero inválido";

            break;
    }
}
