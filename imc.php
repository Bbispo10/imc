<?php

$peso = 60;
$altura = 1.74;
$imc = $peso / $altura ** 2;


echo "Seu IMC é de $imc e você esta com o IMC" . PHP_EOL;

if ($imc < 18.5) {
    echo "Abaixo";
}

    if ($imc < 25) {
        echo "Dentro";
    }

        else {
            echo "Acima";
        }

echo " do recomendado";