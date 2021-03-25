<?php
// fonction trie affiche dernier
$tab = array("tay", "bmw", "vie");
var_dump($tab);

function trie($x)
{
    rsort($x);
    echo $x[0] . "<br/>";
}

trie($tab);
echo "<br/>";

// foction mot par ligne 
$t = "je m'apelle tay j'ai 50 ans";



function ligne($x)
{
    echo str_word_count($x) . "<br/>";

    echo str_replace(" ", "<br/>", $x);
};
ligne($t);
echo "<br/>";
echo "<br/>";
// fonction affichage en ligne 
function afiligne($x)
{
    foreach ($x as $value) {
        echo " $value";
    }
};
afiligne($tab);
echo "<br/>";
echo "<br/>";

// fonction racine caree 
$r = 50;

function racinede($x)
{
    $x < 0 ? $i = -1 : $i = sqrt($x);
    return $i;
};
echo racinede($r);
echo "<br/>";
echo "<br/>";
// fonction max 
$yop = [1, 2, 5, 8, 6, 15, 7, 9, 105];

function maximlo($x)
{
    max($x) > 100 ? $i = 1 : $i = -1;
    return $i;
};
echo maximlo($yop);
echo "<br/>";
echo "<br/>";
// fonction tay random
function aleatoire($x)
{
    $r = 0;
    for ($i = 0; $i < $x; $i++) {
        $t = rand(10, 100);
        echo  $t . "  ";
        $r += $t;
    }
    return $r;
};
echo aleatoire(3);

//  fonction arsene
function randomNum($tab)
{
    $num = 0;
    $var = 0;
    for ($i = 1; $i <= $tab; $i++) {
        $var = rand(10, 100);
        echo $var . "<br/>";
        $num += $var;
    }
    return $num;
}
echo randomNum(4);
echo "<br/>";

// fonction sylvain
function randSum($int)
{
    $nb = '';
    $som = 0;
    $x = 0;
    while ($x < $int) {
        $nbRand = rand(10, 100);
        $nb .= $nbRand;
        $nb .= $x < $int - 1 ? '+' : '';
        $som += $nbRand;
        $x++;
    }
    return $nb . '=' . $som . ' (' . $int . ' nombres)';
}

echo randSum(rand(2, 20)) . '<br>';

// fonction capital pays 

$capitales = [
    ["France" => ["Paris", 215646, 14646848498]],
    ["Belgique" => ["Bruxelles", 1545748, 1877987]],
    ["Allemagne" => ["Berlin", 47948, 48798489787]],
    ["Espagne" => ["Madrid", 54564456, 4748989]],
];
$capitales2 = [
    "France" => ["Paris", 215646, 14646848498],
    "Belgique" => ["Bruxelles", 1545748, 1877987],
    "Allemagne" => ["Berlin", 47948, 48798489787],
    "Espagne" => ["Madrid", 54564456, 4748989],
];


function affichagecap($x)
{


    for ($i = 0; $i < count($x); $i++) {
        foreach ($x[$i] as $t => $r) {
            echo "pays: $t <br/> capital:" . $r[0] . "-nb habitants:" . $r[1] . "-PIB:" . $r[2] . "<br/>";
        };
    };
};
function affichagecap2($x)
{
    foreach ($x as $t => $r) {
        echo "pays: $t <br/> capital:" . $r[0] . "-nb habitants:" . $r[1] . "-PIB:" . $r[2] . "<br/>";
    };
};
affichagecap($capitales);
echo "<br/>";
affichagecap2($capitales2);
echo "<br/>";

// fonctoin arsen 
function listePays($tab)
{
    foreach ($tab as $nb => $infos) {
        echo "pays" . ($nb + 1) . " : ";
        foreach ($infos as $c => $v) {
            echo $c . " : "  . "<br>";
            foreach ($v as $n) {
                echo $n . " <br> ";
            }
        }
    }
};
listePays($capitales);
echo "<br/>";

// fonction verication mot de pass 


$mdptay = "zdefjzeifh";
function verifmdp($x)
{
    strlen($x) < 8 ? $t = -1 : $t = 1;
    strtolower($x) != $x ? $t1 = 1 : $t1 = -1;
    strtoupper($x) != $x ? $t2 = 1 : $t2 = -1;
    (strpos($x, "?") + strpos($x, "&") + strpos($x, "$") + strpos($x, "!")) + 1 == 1 ? $t3 = -1 : $t3 = 1;
    for ($i = 0; $i < strlen($x); $i++) {

        if (is_numeric($x[$i])) {
            $t4 = 1;
            break;
        } else {
            $t4 = -1;
        }
    };
    $t += $t1 + $t2 + $t3 + $t4;
    return $t == 5 ? 1 : -1;
};


$yop = "A4dfgjklr?fgrgr";
echo verifmdp($mdptay);
echo "<br/>";
echo verifmdp($yop);
echo "<br/>";
echo verifmdp("GJJhhij45454!");
echo "<br/>";
echo verifmdp("aiJzaizih!5");
echo "<br/>";
echo verifmdp("aiJz!5");
echo "<br>";
// calcul factioriel 
function factotay($x)
{
    $y = $x;
    for ($i = 1; $i < $x; $i++) {
        $y *= $i;
    }
    return $y;
};
echo factotay(10) . "<br>";
echo factotay(3) . "<br>";

// fnction table de multiplication
// function tablmulti()
// {
//     $x = "";
//     for ($i = 1; $i < 11; $i++) {
//         $x.= "$i :";
//         for ($j = 1; $j < 11; $j++) {
//             $x .= "-----" . ($i * $j) . "-----";
//         }
//         $x .= "<br/>";
//     }
//     echo $x;
// };
// tablmulti();
function tablmulti()
{
    $x = "";
    for ($i = 1; $i <=10; $i++) {
        echo "$i :";
        for ($j = 1; $j <=10; $j++) {
            echo "-----" . ($i * $j) . "-----";
        }
echo "<br/>";
    }

};
tablmulti();
// je commence php et html  "generation de html via PHP"
/* ex1-
on vous demande ce créer un tab de produits qui a la structure suivante(modifié)
$tab = [
    "id" => ["nom", "descrip", "photo.png"],
  ];
ensuite de generer la liste de produits en utilisant le composant card de BS*/

<?php
			include_once("db_connect.php");
			$sql = "SELECT id, name, image, description, address, website, facebook, gplus, twitter FROM cards";
			$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));			
			while( $record = mysqli_fetch_assoc($resultset) ) {
			?>
            <div class="card hovercard">
                <div class="cardheader">               
					<div class="avatar">
						<img alt="" src="<?php echo $record['image']; ?>">
					</div>
				 </div>
                <div class="card-body info">
                    <div class="title">
                        <a href="#"><?php echo $record['name']; ?></a>
                    </div>
					<div class="desc"> <a target="_blank" href="<?php echo $record['website']; ?>"><?php echo $record['website']; ?></a></div>		
                    <div class="desc"><?php echo $record['description']; ?></div>      
					<div class="desc"><?php echo $record['address']; ?></div>								
                </div>
                <div class="card-footer bottom">
                    <a class="btn btn-primary btn-twitter btn-sm" href="<?php echo $record['twitter']; ?>">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a class="btn btn-danger btn-sm" rel="publisher"
                       href="<?php echo $record['gplus']; ?>">
                        <i class="fa fa-google-plus"></i>
                    </a>
                    <a class="btn btn-primary btn-sm" rel="publisher"
                       href="<?php echo $record['facebook']; ?>">
                        <i class="fa fa-facebook"></i>
                    </a>                    
                </div>
            </div>
			<?php } ?>
?>



