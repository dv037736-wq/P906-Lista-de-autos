<?php
function agregarAuto(&$autos) {

    echo "\n--- Agregar Auto ---\n";

    echo "Marca: ";
    $marca = readline();

    echo "Modelo: ";
    $modelo = readline();

    echo "Año: ";
    $anio = (int)readline();

    echo "Estado (Disponible/No disponible): ";
    $estado = readline();

    $autos[] = [
        "id" => count($autos) + 1,
        "marca" => $marca,
        "modelo" => $modelo,
        "anio" => $anio,
        "estado" => $estado
    ];

    echo "Auto agregado.\n";
}  