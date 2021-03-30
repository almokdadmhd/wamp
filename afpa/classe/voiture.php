<!-- <ex 1- creation d'une classe voiture qui a les attributs : nbRoues, couleur, marque, modele -->

<?php

class Voiture
{
  public $nbRoue;
  public $couleur;
  public $marque;
  public $modele;
  // ex 2- on va ajouter à cette classe deux fonctions
  // 1- fonction qui affiche le message : "on est dans la classe voiture"
  // 2- fonction qui affiche les valeurs des attributs de la classe 
  function message()
  {
    echo "on est dans la classe  " . get_class($this);
  }
  function attribut()
  {
    echo $this->marque . "<br>" . $this->couleur . "<br>" . $this->nbRoue . "<br>" . $this->modele;
  }
};

// <!-- ex3 -  créer les methodes necessaires pour pouvoir modifier les attributs de la classe -->
function setMarque($marque)
{
  $this->marque = $marque;
}
function setModele($modele)
{
  $this->modele = $modele;
}
function setNbroue($nbroue)
{
  $this->nbroue = $nbroue;
}

// ex4 - definir dans la classe Voiture, une constante qui s'appelle roule et lui attribuer la valeur "Cette voiture roule bien"
// créer une fonction qui permet d'afficher la valeur de la constante

class Voiture {
  const ROULE = "Cette voiture roule bien";
  public function afficher() {
    echo self::ROULE;
  }
}

$Voiture = new Voiture();
$Voiture->afficher();


// ex5- créer un constructeur qui initialise les attributs de l'obj



<?php
class Fruit {
  public $name;
  public $color;

  function __construct($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
}

$apple = new Fruit("Apple");
echo $apple->get_name();
?>

?>
