
 <html>
<head>
</head>
</html>

<?php

/**
 * ICT-133_JBR - Exercice_Calendrier.php
 * User: Jan.BLATTER
 * Date: 02.12.2019
 */
echo '<link rel="stylesheet" type="text/css" href="../CSS/Index_Calendrier.css">';


// Déclarations
$TableauJour = array(
        'lundi' => 'lun',
        'mardi' => 'mar',
        'mercredi' => 'mer',
        'jeudi' => 'jeu',
        'vendredi' => 'ven',
         'samedi' => 'sam',
        'dimanche' => 'dim',
);

$TableauMois = array('Janvier','Fevrier','Mars','Avril','Mai','Juin','Juillet','Aout','Septembre','Octobre',                      //   Création du tableau Mois
'Novembre','Decembre');

$Tableau = array();



 echo '<div class="month">';
  echo   '<ul>';
       echo '<li class="prev">&#10094;</li>';
      echo '<li class="next">&#10095;</li>';
        echo $TableauMois[date('m')-1];                         // affiche le mois de maintenant via mon tableau Mois
        echo "<br>";
        echo date("o");                                         // Affiche l'année
    echo '</ul>';
    echo '</div>';

echo '<ul class="weekdays">';
   foreach ($TableauJour as $Jour) {                        // Boucle Foureach pour mettre les jours
       echo "<li>$Jour</li>";
   }

echo '</ul>';

 echo '<ul class="days">';
for ($compteur = 1; $compteur < 8 - date("N"); $compteur++) {        // Boucle for pour faire en sorte que les jours correspondents au mois.
    echo '<li></li>';
}
    for ($compteur=1;$compteur<=31;$compteur++) {                // Boucle pour marquer les numéros des jours
     $Tableau[$compteur] = $compteur;



        if ($compteur == date("d")) {              // si $i est égale à date (31) alors ... affiche le jour d'aujourd'hui
            echo '<li><span class="active">' . $Tableau[$compteur] . '</span>';

        } else
            {                                               // affiche le jour et la ligne en gris
            echo '<li>';
            echo '<span class="gris">' . $Tableau[$compteur] . '</span>';
        }


    }
echo '</ul>';

?>