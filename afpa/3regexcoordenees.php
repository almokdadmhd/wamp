<!--  Ex5  3eme Regex coordenes:  pour le weekend, on realise les exo suivants
A- valider un mot de passe avec les conditions suivantes :
doit commencer par une maj, suivie par min, ensuite un ensemble de lettres et chiffres et il finit par un caractere special (&$%!?)
B- valider une adresse mail
C- valider une adresse postale
caracteres autorises : lettres, chiffres, . (point), - (tiret de 6), (_) tiret de 8
D- valider un code postal en France (5 chiffres)
G- remplacer les num de téléphones (succession de chiffres avec ou sans espace, tiret de 6  (-), tiret de 8 (_) ) par la chaine "non autorisé" (utiliser l'une des fonctions regex)
chacun dans une fonction à part -->


<!--  A- MOTS DE PASS
?phpfunction test_num($telephone) {
   preg_match ('/(0|+33)[1-9](*[0-9]{2}){4}/', $telephone) =1 ? "ok" : "nope";
};
?> -->

<!-- j ai fait comme ça maissss -->
<?php
function test_mdp($md)
$var ="Villeneuvedascq59!";
$pattern = "dascq";
if (preg_match('/[^A-Z]{1}[a-z]{*}[0-9]{2}$/ ', $var)) { 
    echo "mots de pass est correcte ";
} else {
    echo "mots de pass est Pas correcte ";
}
?>

<!-- '#^[A-Z][a-z][a-zA-Z0-9]{5,}[&$%!?]$#' de solution frank -->



<!-- B- une adresse mail -->
<!-- "/^[\w.-]{2,}@[a-z0-9\-]{2,}[.][a-z]{2,}$/"  -->


<!-- "/^[\w.-]{2,}@[a-z0-9\-]{2,}[.][a-z]{2,}$/"(modifié)  -->

<!-- C- valider une adresse postale caracteres autorises : lettres, chiffres, . (point), - (tiret de 6), (_) tiret de 8 -->
<!-- en gros tu dois avoir lettre maj ou nim numero et tu peut prendre  les caractères [-.éè] et ca doit se finir par ces caractéres la -->
<!-- "/^[\w\s\n\r-.éè]$/" -->
<!-- D- valider un code postal en France (5 chiffres) -->

<!-- ^(  (0[1-9])  |   ([1-8][0-9])  |   (9[0-8])    |   (2A)    |   (2B)    )  [0-9]   {3}$
(  (0[1-9])  |   ([1-8][0-9])  |   (9[0-8])    |   (2A)    |   (2B)    ) ==> signifie qu 'on a 5 possibilités
 0[1-9])  ou ([1-8][0-9])  ou (9[0-8]) ou (2A) ou  (2B)
ca nous donne 2  chiffres
suivi par 3 chiffres compris entre 0 et 9 -->




<!-- G- remplacer les num de téléphones (succession de chiffres avec ou sans espace, tiret de 6  (-), 
tiret de 8 (_) ) par la chaine "non autorisé" (utiliser l'une des fonctions regex)
chacun dans une fonction à part --> 
toute sous chaine  qui correspond à la regex (1er param de la fonction preg_replace) sera remplacée par "non autorisé" (2eme param) dans la chaine $chaine (3eme param)(modifié)
ensuite in retourne la chaine apres le remplacement


الشرح:
toute sous chaine  qui correspond à la regex (1er param de la fonction preg_replace)
 sera remplacée par "non autorisé" (2eme param) dans la chaine $chaine (3eme param)(modifié)
ensuite in retourne la chaine apres le remplacement

<!-- 


function suppNum($chaine){
    $pattern = '/[\d]([\d][-.\s/*][\d])+[\d]/';
    return  preg_replace('/0[1-9]([-.\s/]?\d{2}){4}/', " non autorisé ", $chaine);

}
$str = 'message 01-23-45-67-89 p suite 01/23/25/69/87  lettres 01.23.25.69.87 encore lettres 01 23 25 69 87 ou 0123256987';
echo suppNum($str);

 0   [0-9]      ([-./\s]?\d    {2}    )        {4}
interprétation :
ca commence par 0
suivi par un chiffre entre 0 et 9


ensuite un groupe complet [-./\s]?\d (on l'appelle groupe-espce par exemple):(modifié)
([-./\s]?\d    {2}    )  groupe-espce (la partie entre ()) se répète 2 fois
ensuite un autre groupe plus global  :  ([-./\s]?\d    {2}    )  on peut l'appeler numComplet qui se repete 4 fois
([-.\/\s]?\d    {2}    )        {4}
(     (un séparateur qui peut etre - ou . ou / ou espace qui peut exister ou pas suivi par un chiffre)  x 2   )   x4 
NB : lorsque vous faites des remplacements multiples avec preg_replace,
 pensez à enlever les ^ et $ (à moins que vous en ayez besoin)
 pour que le remplacement soit fait pour toutes les occurences -->
