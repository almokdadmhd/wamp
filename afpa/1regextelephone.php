<!--1eme Ex regex faire une fonction qui teste si une chaine correspond à un num de tel en france (10 chiffres) -->
<!-- ma sulition -->
<p>
    <?php

    function testelephon()
    {

        if (isset($_POST['telephone'])) {
            $_POST['telephone'] = htmlspecialchars($_POST['telephone']); 

            if (preg_match("#^0[1-68]([-. ]?[0-9]{2}){4}$#", $_POST['telephone'])) {
                echo 'Le ' . $_POST['telephone'] . ' est un numéro <strong>valide</strong> !';
            } else {
                echo 'Le ' . $_POST['telephone'] . ' n\'est pas valide, recommencez !';
            }
        }
    }
    testelephon(0782579884);

    ?>
</p>

<!-- solution reyan
cas 1 : on ne tolere que des chiffres(modifié)
sans espace ou autres caractères, et le num doit commencer par 0
ici on ne prend pas en compte les num internationaux
^0[1-9]{1}[0-9]{8}$ 
( groupement de'expression)   {4}   ==> expression qui se repete 4 fois
on va expliuqer l'expression qui se repete : celle qui se trouve entre ()
et on utilise les () pour dire que c'est tte cette expression qui se repete 4 fois, sinon le {4} va s'appeliquer sur le dernier symbole seulement
([-. ]?\d{2})   ([-. ]?\d{2}) : cette expression veut dire qu on va avoir l'un des caractères -. (- ou . ou espace) 0 ou une fois 
ensuite \d === [0-9] c'est des chiffres
et on ajoute {2} pour dire que les chiffres se repetent EXACTEMENT 2 fois
ce qui donne apres le 01 - 09  la chaine - 23
exemple 01-23
ensuite la dernière partie se répète 4 fois (EXACTEMENT)
exemple ([-. ]?\d{2}){4} donne ==>   -23-69-58-47
en gros, dans cette expression on a deux parties
partie 1 :    0[1-9] ==> 01 ou 02 ....   09
partie 2 ([-. ]?\d{2}){4} donne ==>   -23-69-58-47
ca valide un  num de tel du genre 01-23-69-58-47
-->

<?php
function test_num($telephone) {
   preg_match ('/(0|+33)[1-9](*[0-9]{2}){4}/', $telephone) =1 ? "ok" : "nope";
};
?>