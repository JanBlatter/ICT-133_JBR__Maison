<?php
/**
 * ICT_133_JBR_new - model.php
 * User: Jan.BLATTER
 * Date: 13.01.2020
 */

function checkLogin($motdepasse,$utilisateur)
{


    if ($motdepasse == 1234 && $utilisateur == "Jan@cpnv.ch") {
        return true;
    } else
        return false;


}
?>
