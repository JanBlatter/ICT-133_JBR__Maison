<?php
/**
 * ICT_133_JBR_new - login.php
 * User: Jan.BLATTER
 * Date: 06.01.2020
 */
// tampon de flux stocké en mémoire
ob_start();
$titre="Rent  A Snow - Accueil"
?>
<form class="form" method="POST" action="index.php?action=login">
    <br>
    <b>Username:</b><br>
    <input  type="email" name="username" value="" placeholder="username" required>
    <br>
    <b>Password:</b><br>
    <input type="password" name="password" value="" placeholder="password" required>
    <br>
    <br>
    <input type="submit" value="submit">
</form>
<?php
$content = ob_get_clean();
require "gabarit.php";
