<?php
require_once 'connexion.php';

$idcon = connexion();
// var_dump($idcon);
$requete = "SELECT * FROM clients ORDER BY nom";
// query (préfifini) pour: executer la requete
$result = $idcon->query($requete);
// donne le nombre de lignes retournées
$count = $result->rowCount();
var_dump($count);
$colcount = $result->columnCount();
echo "<br>";
var_dump($colcount);
echo "<br>";
// faire une requete qui affcihe la liste des clients dont l'age est > 18 ans de la table clients

$age = 18;
$requete = $idcon->prepare('SELECT nom, age  FROM clients  WHERE age > :age');
$requete->execute([':age' => $age]);
echo $requete->rowCount();
echo "<br>";

// 1eme methode de parcours de données
/*
$count = $requete->rowCount();
if ($count > 0) {
    while ($row = $requete->fetch(PDO::FETCH_ASSOC)) {
        echo "nom: " . $row["nom"] . "<br>";
    }
} else {
    echo "0 results";
}*/ 
// 2eme methode de parcours de données
if ($count > 0) {
    $clients = $requete->fetchAll();
    foreach ($clients as $client) {
        echo $client['nom'] . '<br />';
    }
} else {
    echo "0 results";
}
/*ex-2
dans la table departement, chercher le departement nord et afficher toutes les information qui le concernent
requete préparée + affichage*/

// هذا الحل تبعي لكن المشكلة أنو الزبون لا يعرف رقم المحافظة.....
$departement = 59;
$requete = $idcon->prepare('SELECT * FROM departement WHERE departement_code=59');
$requete->execute([':age' => $departement]);
echo $requete->rowCount();
echo "<br>";


// هذا الحل الصحيح 
$dep = "Nord";
$requete2 = $idcon->prepare("SELECT * FROM departement WHERE departement_nom =:dep");
$requete2->execute([":dep" => $dep]);
$count2 = $requete2->rowCount();
if ($count2 > 0){
      $departement= $requete2->fetch();

    echo $departement['departement_id'] . " " . $departement['departement_code'] . '<br />';
 
} else {
  echo "0 results";
}


// ex 3 on va faire une fonction qui s'appelle listeDep() et qui admet 1 param qui est le nom du département
// cette fonction va chercher les depratments dont le nom ressemble à celui qui a été spécifié en param

listeDep("Alpes");
cad les chaines qui
1- commencent par d'autres caract, suivis du mot alpes
2-ya pas d'autres caract, donc la chaine commence par alpes
3-la chaine contient alpes et suivies par d'autres caract
4-elle commence par d'autres caract, puis la chaine alpes puis autres caract
%alpes% ==>            0 ou n caract       +          alpes          +          0 ou n caract

function listeDep($departement)
[10:36]
{
    $idcon = connexion();
[10:37]
$depp = "%$departement%";
    $requete3 = $idcon->prepare("SELECT * FROM departement WHERE departement_nom LIKE :departement");
[10:38]
$requete3->execute([":departement" => $depp]);
[10:38]
$count3 = $requete3->rowCount();
[10:38]
if ($count3 > 0) {
[10:38]
$departements = $requete3->fetchAll();
[10:39]
foreach ($departements as $departement) {
        echo $departement['departement_id'] . " " . $departement['departement_code'] . " " . $departement['departement_nom'] . '<br />';
      }
[10:39]
} else {
      echo "0 results";
    }
  }
  listeDep("Alpes");






/*require_once "Voiture.php";
$twingo = new Voiture ("twingo", "renault", 4, "rouge");

var_dump($twingo);

$megane = new Voiture ("megane", "renault", 4, "bleu");
var_dump($megane);
$kalos = new Voiture ("kalos", "chevrolet", 4, "noir");
var_dump($kalos);


$dacia = new Voiture ("dacia", "renault", 4, "verte");



echo "<br> une " . $dacia->getModele() . " " . $dacia->getMarque() . " " . $dacia->getCouleur();
$dacia->setCouleur("rouge")->setMarque("citroen")->setModele("C3");
echo "<br> une " . $dacia->getModele() . " " . $dacia->getMarque() . " " . $dacia->getCouleur();
echo "<br>ma voiture a " . $dacia->getNbRoue() . " roues.";
$dacia->setNbRoue(5);
echo "<br>ma voiture a " . $dacia->getNbRoue() . " roues.";
echo "<br>".Voiture::$nb;



echo $dacia->tableauVoiture();
Voiture::nombreVoiture();
require_once "Vehicule.php";
echo "<br>";
$harleydavindson= new Moto (2,"rouge","harley-davidson","jesaispas");
$harleydavindson->affichage();
$harleydavindson->affichageParent();*/
