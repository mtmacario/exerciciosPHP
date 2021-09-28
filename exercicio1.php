<?php
// Escreva uma função que receba um número indeterminado de parâmetros(números) e retorne a média desses números.

function mediaAritimetica()
{
    $qtdParams = func_get_args();

    if (empty($qtdParams)) {

        $media = 0;
    } else {

        $media = array_sum($qtdParams) / count($qtdParams);
    }
    return $media;
}
