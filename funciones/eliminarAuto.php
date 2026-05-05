<?php
function eliminarAuto(&$autos) {

    echo "\n--- Eliminar Auto ---\n";
    echo "Ingresa el ID: ";
    $id = (int)readline();

    for ($i = 0; $i < count($autos); $i++) {

        if ($autos[$i]["id"] === $id) {

            array_splice($autos, $i, 1);
            echo "Auto eliminado.\n";
            return;
        }
    }

    echo "ID no encontrado.\n";
}