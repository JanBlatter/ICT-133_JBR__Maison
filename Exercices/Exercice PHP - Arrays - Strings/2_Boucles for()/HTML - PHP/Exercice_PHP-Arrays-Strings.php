
<html lang="fr">
<body>

<?php
/**
 * ICT-133_JBR - Exercice_PHP-Arrays-Strings.php
 * User: Jan.BLATTER
 * Date: 25.11.2019
 */
echo '<link rel="stylesheet" type="text/css" href="../CSS/Index.css">';

$Tableau = array();   // Creation of array

echo date( 'F');             // Month
echo '<hr>';
echo '<table class="tableau">';        // Beginning of the table

echo '<tr>';
for($i=1;$i<=31;$i++){                      // Loop for

    $Tableau[$i] = $i;

    if ($i % 2 != 1) {
        echo "<td class='td_bleu'>$Tableau[$i]</td>";            // blue case
                                                                 // MODULO
    } else {

        echo "<td class='td_blanc'>$Tableau[$i]</td>";           // white case
    }



    if($i == 7 || $i == 14 || $i == 21 || $i == 28){                // BR
        echo '<br>';
        echo '</td>';
        echo '</tr>';

    }



}
echo'</table>';                                                 // End of the table

?>

</body>
</html>