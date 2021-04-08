<?php
class Voiture 
{
    public $nbRoue;
    public $couleur;
    public $marque;
    public $modele;
    const ROULE = "cette voiture roule bien";
    function setNbRoue($t)
    {
        $this->nbRoue = $t;
    }

    function setCouleur($t)
    {
        $this->couleur = $t;
    }

    function setMarque($t)
    {
        $this->marque = $t;
    }

    function setModele($t)
    {
        $this->modele = $t;
    }

    function __construct($mo, $ma, $nr, $c)
    {
        $this->couleur = $c;
        $this->nbRoue = $nr;
        $this->marque = $ma;
        $this->modele = $mo;
    }

    function roule()
    {
        echo self::ROULE;
    }

    function message()
    {
        echo "on est dans la classe " . get_class($this);
    }
    function attribut()
    {
        echo $this->marque . "<br>" . $this->couleur . "<br>" . $this->nbRoue . "<br>" . $this->modele;
    }
};

// private et protected 

class Voiture
{
    private $nbRoue;
    private $couleur;
    private $marque;
    private $modele;
    public static $nb = 0;



    function __construct($mo, $ma, $nr, $c)
    {
        $this->couleur = $c;
        $this->nbRoue = $nr;
        $this->marque = $ma;
        $this->modele = $mo;
        self::$nb++;
    }
    function tableauVoiture()
    { ?>
    
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">couleur</th>
                    <th scope="col">nombre de roue</th>
                    <th scope="col">marque</th>
                    <th scope="col">modele</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row"></th>
                    <td><?php echo $this->couleur ?></td>
                    <td><?php echo $this->nbRoue ?></td>
                    <td><?php echo $this->marque ?></td>
                    <td><?php echo $this->modele ?></td>
                </tr>

            </tbody>
        </table>
<?php
    }
    static function nombreVoiture()
    {
        echo "<h2>" . self::$nb . "</h2>";
    }
    function getNbRoue()
    {
        return $this->nbRoue;
    }
    function setNbRoue($t)
    {
        $this->nbRoue = $t;
        return $this;
    }
    function getCouleur()
    {
        return $this->couleur;
    }
    function setCouleur($t)
    {
        $this->couleur = $t;
        return $this;
    }
    function getMarque()
    {
        return $this->marque;
    }
    function setMarque($t)
    {
        $this->marque = $t;
        return $this;
    }
    function getModele()
    {
        return $this->modele;
    }
    function setModele($t)
    {
        $this->modele = $t;
        return $this;
    }
};
