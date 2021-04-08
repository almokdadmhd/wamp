<?php
class Vehicule
{
    protected $nbRoues;
    protected $couleur;
    protected $marque;
    protected $modele;

    function __construct($nbRoues, $couleur, $marque, $modele)
    {
        $this->nbRoues = $nbRoues;
        $this->couleur = $couleur;
        $this->marque = $marque;
        $this->modele = $modele;
    }
    function affichage()
    {
        echo "je suis la classe Vehicule";
    }
};
class Moto extends Vehicule
{
    private $volume;
    function getVolume()
    {
        return $this->volume;
    }
    function setVolume($a)
    {
        $this->volume = $a;
        return $this;
    }
    function affichage()
    {
        echo "je suis la classe Moto <br>";
    }
    function affichageParent()
    {
        echo " je suis la classe parente <br>";
        parent::affichage();
    }
}
