<!-- Exercice 1 :  --> -->
<!-- Ex1- Vous avez un tab de chaines de caract.  le trier selon l'ordre alphabétique, puis afficher la dernière chaine  vous créez une fonction pour ca -->
<?php
$fruits=['banane','fraise','kiwi'];
function tri($fruits){
         sort($fruits);
         echo end($fruits);
};
         tri($fruits);
?>
   <!-- Ex2- on vous donne une chaine de caract., on veut afficher chaque mot sur une ligne -->
<?php
$days = "Friday Saturday Sunday Monday Tuesday wednesday thursday";
function affi($days){
    echo str_replace(" ","<br/>",$days);
};
         affi($days);
?>
   <!-- Ex3- on vous donne un tab de chaines de carac, on veut afficher son contenu dans une seule ligne -->
<?php
$days = ["Friday", "Saturday", "Sunday", "Monday", "Tuesday", "wednesday", "thursday"];
function affi($days){
    foreach ($days as $value) {
        echo " $value ";
    };
};
affi($days);
?>
   <!-- Ex4- afficher la racine carré d'un nombre donné (il faut que le nombre soit positif, s'il ne l'est pas on retourne -1) -->
<?php
function racinede($x){
    $x<0       ?        $i=-1      :       $i=sqrt($x);
    return $i; 
};
?>
   <!-- Ex5- on vous donne un tab d'entier, si la val max de ce tab> 100, retourner 1 sinon retourner -1 -->
<?php
$tab1=[1,3,5,8,36,58,69,21];
$tab2=[23,45,236,458,1,0];
function maxTab($tab){
    max($tab)> 100 ? $i= 1 : $i= -1;
    return $i;
    // }                         ( melleir method quant ya deux condition )
echo maxTab($tab1);
echo maxTab($tab2);
?>
   <!-- Ex6- créer une fonction qui génère n nombre aléatoires (n nombre donné), on les affiche et on retourne leur somme -->
<?php
function randSum($int){
    $nb='';
    $som=0;
    $x=0;
    while ($x<$int) {
        $nbRand = rand(10, 100);
        $nb.= $nbRand;
        $nb.=$x<$int-1?'+':'';
        $som+=$nbRand;
        $x++;
    }
    return $nb.'='.$som.' ('.$int.' nombres)';
}
echo randSum(rand(2, 20)).'<br>';
?>

<?php
function randomNum($nb){
    $somme = 0; $var = 0;
    for($i = 1; $i <= $nb; $i++){
        $var = (rand(10,100));
        echo $var . "<br>";
        $somme+=$var;
    }
    return $somme;
}
?> 


   <!-- Ex7- $capitales=[ -->
    <!-- ["France"=>["Paris",215646,14646848498]], -->
    <!-- ["Belgique"=>["Bruxelles",1545748,1877987]], -->
    <!-- ["Allemagne"=>["Berlin",47948,48798489787]], -->
    <!-- ["Espagne"=>["Madrid",54564456,4748989]], -->
<!-- ]; -->
<!-- - on vous donne le tab suivant qui est au format Pays => capitale, nb habitants, PIB -->
<!-- on veut afficher chaque pays, sa capitale, son nb habitants et son PIB -->
<!-- au format suivant : -->
<!-- pays : France -->
<!-- capitale : Paris - nb habitants : 215646 - PIB : 14646848498 -->

<!-- un tab associatif  (foreach plus adapte )  1érement on doit parcourir le tableau + donc on pense à boucler -->
<!-- on considere le code complet suivant :  -->
<?php
$capitales=[
    ["France"=>["Paris",215646,14646848498]],
    ["Belgique"=>["Bruxelles",1545748,1877987]],
    ["Allemagne"=>["Berlin",47948,48798489787]],
    ["Espagne"=>["Madrid",54564456,4748989]],
];
function pays($capitales){
    foreach($capitales as $pays=> $val)
    {
        foreach ($capitales[$pays] as $donnees => $donnee){
            echo "Pays : ".key($capitales[$pays])."<br>";
            echo "Capitale : ".$donnee[0]."<br>";
            echo "nb habitants : ".$donnee[1]."<br>";
            echo "PIB : ".$donnee[2]."<br><br>";
        }
    }
}
?>
 <!-- on va l'expliquer en détails -->
<!-- 1-lors de la 1ere boucle foreach, on obtient des cases, ces cases sont indexées de 0à3 -->
<!-- case 0 = ["France"=>["Paris",215646,14646848498]] etc -->
<!-- :on fait recours à la 1ere foreach pour recupérer les cases -->
<!-- function pays($capitales){ -->
    <!-- foreach ($capitales as $pays=> $val) -->
    <!-- { -->
    <!-- }             -->
<!-- }                    ce qui donne ça -->
<!-- 2- pour a chacune des cases, comme on obtient un tab aussi, on pense à la parcourir -->
 <!-- ["France"=>["Paris",215646,14646848498]]  -->
<!-- donc on fait une 2eme foreach à l'intérieur de la 1ere -->
<!-- foreach($capitales as $pays=> $val) -->
<!-- { -->
    <!-- foreach ($capitales[$pays] as $donnees => $donnee){ -->
    <!-- } -->
<!-- } -->
<!-- dans la 2eme foreach parcourt chaque case du tab capitales (car elle meme est un tableau) -->
<!-- et on a écrit $capitales[$pays], car cela est équivalent à $capitales[0] pour la 1ere itération -->
<!-- ensuite pour pouvoir recupérer le nom du pays, on a besoin de récupérer la clé du sous tab -->
    <!-- ["France"=>["Paris",215646,14646848498]] avec la fonction key() -->
     <!-- key($capitales[$pays]) -->
<!-- ou bien  ecrire tt simlement $donnees -->
<!-- puisqu'elle represente la clé du sous tab -->
<!-- echo  "Pays : ".$donnees."<br>"; -->
<!-- ensuite on affiche les données du sous tab -->
        <!-- echo "Capitale : ".$donnee[0]."<br>"; -->
        <!-- echo "nb habitants : ".$donnee[1]."<br>"; -->
        <!-- echo "PIB : ".$donnee[2]."<br><br>"; -->
<!-- autre methode du code complet -->
<?php
$capitales=[
    ["France"=>["Paris",215646,14646848498]],
    ["Belgique"=>["Bruxelles",1545748,1877987]],
    ["Allemagne"=>["Berlin",47948,48798489787]],
    ["Espagne"=>["Madrid",54564456,4748989]],
];
function listePays($tab){
    foreach($tab as $nb => $infos){
        echo "pays" . ($nb + 1) . " : ";
        foreach($infos as $c => $v){
            echo $c . " : "  . "<br>";
            foreach($v as $n){
                echo $n . " <br> ";
            }
        }
    }
}
echo listePays($capitales);
?>

   <!-- Ex8- on vous donne un mdp (chaine de caractères) et on vous demande de vérifier s'il respecte les conditions suivantes ou pas -->
<!-- il doit contenir au moins une maj -->
<!-- il doit contenir au moins 8 caractères -->
<!-- il doit contenir au moins une min -->
<!-- il doit contenir au moins une lettre -->
<!-- il doit contenir au moins un caract spécial : &$!? -->
<!-- s'il respecte ces conditions on renvoie 1, sinon -1 -->
<!-- NB : dans cet ex, on va pas utiliser les expressions regulieres -->
<!-- solution 1 -->

<?php
$ch="aBghhuijoij1!";
function verifkMdp($ch) {
    if (strlen($ch) < 8) {
        return -1;
    }
    $maj=["A","B","C"];
    $min=["a","b","c"];
    $chiffres=[0,1,2,3,4];
    $spec=["&","!","?","$"];

    $valid_maj= false;
    $valid_min = false;
    $valid_chiffres = false;
    $valid_spec = false;

    for ($i = 0; $i < strlen($ch); $i++) {

        if (in_array($ch[$i], $maj)) {
            $valid_maj = true;
        }
        if (in_array($ch[$i], $min)) {
            $valid_min = true;
        }
        if (in_array($ch[$i], $chiffres)) {
            $valid_chiffres = true;
        }
        if (in_array($ch[$i], $spec)) {
            $valid_spec = true;
        }
        if ($valid_maj && $valid_min && $valid_chiffres && $valid_spec === true) {
            return 1;
        }
    }
    return -1;
}
echo verifkMdp($ch);
?>
<!--Explication
1- etape1 : je teste si la loing de la chaine est < 8 ==> je retourne systemetiquement 
2-etape 2, je mets toutes les lettres min et maj, chiffres, et carac speciaux chacun dans un tab à part
    $maj=["A","B","C"];
    $min=["a","b","c"];
    $chiffres=[0,1,2,3,4,5,6,];
    $spec=["&","!","?","$"];
(bien sur vous mettez le reste des lettres)
avant la boucle, j'initialise des var booléennes à false
$valid_maj= false;
    $valid_min = false;
    $valid_chiffres = false;
    $valid_spec = false;
3-je parcours la chaine, caractere par caractere et je regarde si celui ci figure dans les 4 tab ou pas , pour le parcours je pense à la boucle for
for ($i = 0; $i < strlen($ch); $i++) {           }
4-je regarde à chaque fois si le caract existe dans les tab ou pas en utilisant la fonction in_array()
autre chose à la quelle il faut penser, si jamais je trouve un caract qui correspond à mes conditions, il faut que je memorise ça quelque part (dans une var)
chacune correspond à l'existance d'un caracrt correspondant dans le tab associé
par exemple : valid_maj = true s'il existe au moins une maj dans ma chaine
5- à l'intérieur de ma boucle for, je v tester si le caractère existe dans l'un des tab, si oui, je mets la var booléenne correspondante à true
1ere condition    if (in_array($ch[$i], $maj)) {   $valid_maj = true;       }
2eme              if (in_array($ch[$i], $min)) {   $valid_min = true;        }
3eme              if (in_array($ch[$i], $chiffres)) { $valid_chiffres = true; }
4eme              if (in_array($ch[$i], $spec)) {  $valid_spec = true;       }
6- supposont que j ai trouvé les caracteres recheerchés et qu on est > 8 caract, pas besoin de continuer à boucler encore et tester le reste des caract
exemple qui satisfait cette condition : Az1!fgmpk
à partir de la 4eme iteration, je peux constater que toutes mes conditions sont satisafaites
donc je mets un test pour renvoyer un et quitter
if ($valid_maj && $valid_min && $valid_chiffres && $valid_spec === true) {
            return 1;       }
cette condition veut dire que si toutes les var booleennes sont à vrai c que les caract exigés sont là, donc je renvoie 1
apres la fin de la boucle for, si j'arrive pas à renvoyer 1, alors il y au moins une condition qui n'est pas satisfaite, donc je renvoie -1 directement
Ex9- calcul de la factorielle d'un nb
 sachant que la factoeielle de 4 se calcule comme suit :  4x3x2x1 = 24 -->
<?php
function factorielle($int){
    $result = 1;
    if(!is_numeric($int)){
        return 'il faut un nombre';
    }
    for($i=1;$i<=$int;$i++){
        $result*=$i;
    }
    return $result;
}
echo factorielle(4);
?>
Ex8- afficher ta table de multiplication (matrice)
<?php
function tablmulti(){
    $x = "";
    for ($i = 1; $i < 11; $i++) {
        $x.= "$i :";
        for ($j = 1; $j < 11; $j++) {
        $x .= "-----" . ($i * $j) . "-----";
        }
        $x .= "<br/>";
    }
    echo $x;
};
tablmulti();
?>
