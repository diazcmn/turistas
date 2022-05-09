<?php

/**Este programa es un juego para adivinar palabras */
//string $palabraX, $secuenciaPalabras
//int $cantPalabras, $i, $coincidencias


//inicalizacion de variables
$cantTuristas = 0;
$promedioDolares = 0;
$sumaTuristas = 0;
$cuidadMayorTuristas = 0;


do {
    echo "Ingrese nombre del destino tusistico: ";
    $cuidad = trim(fgets(STDIN));
    echo "Ingrese cantidad de turistas: ";
    $cantTuristas = trim(fgets(STDIN));
    echo "Ingreso (dolares): ";
    $dolares = trim(fgets(STDIN));

    if ($cantTuristas > $mayorCantTuristas) {
        $cuidadMayorTuristas = $cantTuristas;
        $cuidadMayorTuristas = $cuidad;
    }

    if ($cuidad == "San Martin de los Andes") {
        $cantTuristasSma = $cantTuristas;
    }

    $sumaTuristas = $sumaTuristas + $cantTuristas;
    $cantTuristas = $cantTuristas + 1;
    $promedioDolares = $promedioDolares + $dolares;

    echo "Desea ingresar mas destinos?(s/n): ";
    $rta = trim(fgets(STDIN));
} while ($rta == "s");

//promedio

$porcentajeTuristas = $cantTuristasSma * 100 / $sumaTuristas;
$promedioDolares = $dolares / $cantTuristas;

//resultados

echo "El promedio de ingresos es .$promedioDolares";
echo "San Martin de los Andes recibio .$porcentajeTuristas";
echo "El destino turistico con mas turistas es .$cuidadMayorTuristas";
