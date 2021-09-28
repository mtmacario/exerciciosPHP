<?php

// Escreva uma função que receba um número indeterminado de parâmetro e imprima o maior e o menor deles.

function MaxMin()
{

    $qtdParams = func_get_args();

    if (!empty($qtdParams)) {

        return print "Maior valor = " . max($qtdParams) . "e Menor valor = " . min($qtdParams);
    } else {

        return print "nao existe parametros";
    }
}
