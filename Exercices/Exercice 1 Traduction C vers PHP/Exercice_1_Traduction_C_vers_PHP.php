<?php
$value = 20;
$step = 3;
$i = 0;

while ($i < 10) {                                // Tant que i est plus petit que 10
    if ($value >= 30) {                         // si la valeur de value est plus grande que 30
        echo("le nombre vaut $value\n");        //  affiche $value

    } else {                                       // Sinon
        echo("nombre trop petit\n");            // Affiche nombre trop petit
    }
    $value += $step;
    $i++;
}
return 0; // retourne







