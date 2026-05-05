<?php
include_once "funciones/index.php";

$autos = datosAutos();
$salir = false;

while (!$salir) {

    imprimirMenu();

    echo "Selecciona una opcion: ";
    $opcion = (int)readline();

    switch ($opcion) {

        case 1:
            agregarAuto($autos);
            break;

        case 2:
            listarAutos($autos);
            break;

        case 3:
            eliminarAuto($autos);
            break;

        case 4:
            echo "Bye \n";
            $salir = true;
            break;

        default:
            echo "Opcion no valida\n";
    }
}