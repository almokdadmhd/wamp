<!-- <ex 1- creation d'une classe voiture qui a les attributs : nbRoues, couleur, marque, modele -->
<!-- ex 2- on va ajouter à cette classe deux fonctions
1- fonction qui affiche le message : "on est dans la classe voiture"
2- fonction qui affiche les valeurs des attributs de la classe -->
<?php
class Voiture
{
  public $nbRoues;
  public $couleur;
  public $marque;
  public $modele;



  function set_nbRoues($name){
    $this->name = $name;
  }
  function get_nbRoues($name){
    $this->name = $name;
  }
  function set_couleur($color){
    $this->color = $color;
  }
  function get_couleur($name){
    $this->name = $name;
  }
  function set_marque($name){
    $this->name = $name;
  }
  function get_marque($color){
    $this->color = $color;
  }
  function set_modele($name){
    $this->name = $name;
  }
  function get_modele($color){
    $this->color = $color;
  }
 
  
}
$apple = new Voiture();
$apple->set_nbRoues('4');
$apple->set_couleur('red');
$apple->set_marque('bmw');
$apple->set_modele('501');



echo "on est dans la classe voiture: " . (Voiture);
echo "<br>";
?>

