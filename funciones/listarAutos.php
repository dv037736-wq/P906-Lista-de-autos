<?php
function listarAutos($autos) {

    echo " \n======= LISTA DE AUTOS ======= \n";

    for ($i = 0; $i < count($autos); $i++) {

        $a = $autos[$i];

        echo "ID: " . $a["id"] . "\n";
        echo "Marca: " . $a["marca"] . "\n";
        echo "Modelo: " . $a["modelo"] . "\n";
        echo "Año: " . $a["anio"] . "\n";
        echo "Estado: " . $a["estado"] . "\n";
        echo "------------------------------\n";
    }

    echo "Presiona Enter para continuar...";
    readline();
}