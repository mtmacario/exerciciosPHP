<?php
//Faça um Programa que peça os 3 lados de um triângulo. O programa deverá informar se os valores podem ser um triângulo. Indique, caso os lados formem um triângulo, se o mesmo é: equilátero, isósceles ou escaleno

function triangulo($l1, $l2, $l3)
{

    if (($l1 + $l2 < $l3) && ($l1 + $l3 < $l2) && ($l3 + $l2 < $l1)) {

        print "valores validos para um triangulo e é um";

        if ($l1 == $l2 && $l2 == $l3) {

            return print "triangulo equilatero";
        } elseif ($l1 == $l2 || $l1 == $l3 || $l2 == $l3) {

            return print "trinagulo isosceles";
        } else {

            return print "triangulo escaleno";
        }
    } else {

        return print "não é um triangulo";
    }
}
