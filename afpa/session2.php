<?php
session_start();
?>
<!DOCTYPE html>
<html>

<body>
    <?php
    if (isset($_SESSION['nom'])) {
        echo "afficher le nom " . $_SESSION["nom"] . ".<br>";
        echo "afficher le precom " . $_SESSION["prenom"] . ".<br>";
        echo "afficher l'adress' " . $_SESSION["adresse"] . ".";
    ?>
        <a href="session3.php">suppression</a>
    <?php
    } else {

        echo "pas de session";
    ?>
        <a href="session1.php">creation</a>
    <?php
    }
    ?>

</body>

</html>