<?php
session_start();
?>
<!DOCTYPE html>
<html>

<body>
    <?php
    $_SESSION["nom"] = "HIDRI";
    $_SESSION["prenom"] = "Rayen";
    $_SESSION["adresse"] = "Lille";
    ?>
    <p>Session créée</p>
    <a href="session2.php">Affichage</a>
   
</body>


</html>
 


