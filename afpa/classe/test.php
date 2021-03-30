<!-- ex5- créer un constructeur qui initialise les attributs de l'obj (dans la classe Voiture)
créer un fichier qui s'appelle Test.php, dans lequel on instancie la classe Voiture
NB : pour pouvoir utiliser un fichier dans un autre, n'oubliez pas de l'inclure dedans 
nbRoues, couleur, marque, modele
-->

<?php

class voiture
{
    public $nbRoues;
    public $couleur;
    public $marque;
    public $modele;
    function __construct($nbRoues, $couleur, $marque, $modele)
    {
        $this->nbRoues = $nbRoues;
        $this->couleur = $couleur;
        $this->marque = $marque;
        $this->modele = $modele;
    }
    function get_nbRoues()
    {
        return $this->nbRoues;
    }
    function get_couleur()
    {
        return $this->couleur;
    }
    function get_marque()
    {
        return $this->name;
    }
    function get_modele()
    {
        return $this->modele;
    }
}

$apple = new voiture("4, red, bmw, 502");
echo $apple->get_nbRoues();
echo $apple->get_couleur();
echo $apple-> get_marque();
echo $apple->get_modele();

?>