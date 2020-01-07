<?php
/**
 * Created by PhpStorm.
 * User: raphael.favre
 * Date: 01.12.2018
 * Time: 21:02
 * Title : DemoArrays.php
 */

/* Help:    https://www.w3schools.com/php/php_arrays.asp
            http://php.net/manual/en/function.array.php
*/

//<editor-fold desc="Indexed Array">
// each Element of this array content a name of a Web Browser
$browsers = array('Safari','Edge','Chrome','Firefox');

// assign 'Chrome' to $mostUsedBrowser
$mostUsedBrowser = $browsers[2];

// Replaces 'Edge' with 'Opera'
//TODO - il vous faut coder ici
$browsers[1] ='Opera';          // Remplaces 'Edge' in 'Opera'


// Loop through an Indexed Array
$arrLength = count($browsers);      // Assign the number of Elements of the Array '$browsers'
$browsersList = "";
//TODO - il vous faut coder ici
for ($compteur =0;$compteur < $arrLength;$compteur++)       // Boucle qui affiche les valeurs du tableau indexé
{
    if ($compteur ==  0)    // Si le compteur est à 0 , affiche le tableau sans un tiret
    {
        $browsersList = $browsers[$compteur];
    }
    else {                              // affiche avec un tiret
       $browsersList = $browsersList. ' - ' . $browsers[$compteur];
    }
}
    echo $browsersList;
    echo '<br>';

//</editor-fold>

//<editor-fold desc="Associated Array">
// each Element of this associated array contains a part of the contact information
$contactInfo= array(
    'name'      => 'John Doe',
    'address'   => 'Rue de Lausanne 25',
    'NPA'       => 1400,
    'City'      => 'Yverdon'
);

// assign the city ("Yverdon") to $Home
//TODO - il vous faut coder ici
$Home = $contactInfo['City'];

// Replaces 'John Doe' with 'Jane Doe'
//TODO - il vous faut coder ici
$contactInfo['name']='Jane Doe';


// Loop through an Associated Array
$completedContact="";

foreach ($contactInfo as $element){             // affiche les valeurs via les élements
    if ($element == 'Jane Doe'){                // Si le pointeur est à jane Doe donc au début, affiche sans tiret
        echo  $completedContact = $element;
    }
    else
    {
       echo  $completedContact = '-'. $element;        // Sinon affiche avec tiret , donc après jane doe
    }

}

echo '<br>';
//</editor-fold>

//<editor-fold desc="Two-dimensional Array">
// Each Element of this Two-dimensional array contains a name of a person
$people= array(
    array('Perceval','Arthur','Lancelot','Leodagan'),
    array('Marge','Homer','Bart','Maggie'),
    array('Joe','Jack','William','Averell'),
);

// assign "Joe" to $person
$person = $people[2][0];

// Replaces 'Bart' with 'Lisa'
$people[1][2] = 'Lisa';



// Loop through an Two-dimensional Array
$rowLength = count($people);        //Assign the number of rows of the array "People"
$colLength = count($people[0]);     //Assign the number of Elements (columns) of the of the array "People"
$personList="";                     // Initialise the string $PersonList

//TODO - il vous faut coder ici
for ($row =0;$row <$rowLength;$row++)
{
    if ($row == 0)
    {
         $personList = $people[$row][$row];

    }
    for ($col = 0; $col < $colLength; $col++)
    {
         $personList = $personList . " - " . $people[$row][$col];
    }

}
echo $personList;
//</editor-fold>
