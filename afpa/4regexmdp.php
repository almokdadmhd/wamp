<!--  ex6-  on va reprendre le meme exemple du mot de passe
contraintes :
1-   existance d'une lettre maj, lettre min, des ch=ffres, un caractère spécial  (!@#$%^&*-)
2-l'ordre n'est pas important
3- min 8 caracteres, max 20 caracteres -->

<!-- solution: -->
<!--
 ^(?=.* [a-z])(?=.* [A-Z])(?=.*[0-9])(?=.*[!@#$%^&*-]).{8,20}$


on a 4 groupes suivis par . (point), le tout se repete de 8 à 20 fois
?= : verifier d'il existe dans le sens ==>
ca devrait etre à l'intérieur des ()
(?=.* [a-z]) : cela signifie qu'on cherche une correspondance avec l'expression  .*[a-z] dans le sens de gauche à droite (sens par defaut)
autrement dit il cherche l'expression  : des caractères  qui existent 0 ou plusieurs fois puis un caractere minuscule
.* : n'importe quel caractère qui peut exister 0 ou n plusieurs fois.
si on écrit [a-z] tout court, il va chercher une chaine qui commence forcément par [a-z] 
par contre si on met .* ca signifie que ca peut etre précédé par des caractères
?= va chercher l'existance de l' expression  .* [a-z]
ensuite il va faire la meme chose pour les maj, les chiffres et les caract spéciaux 
et toute cette expression doit se répéter entre 8 et 20 fois {8,20}

?= : verifier d'il existe dans le sens ==> 
on cherche l'existance de l'expression dans le sens de gauche à dte
(?=motif)    Vrai si le motif est vérifié (lookahead : suivi par motif sens ==> : )
(?!motif)    Vrai si le motif échoue (negative lookahead : non suivi par motif sens ==>)
(?<=motif)    Vrai si le motif est vérifié (lookbehind : précédé par motif sens <== )
(?<!motif)    Vrai si le motif échoue (negative lookbehind : non précédé par motif sens <== )
? avec sybole de look : lookaround signifie suivi par (il doit exister) =/=  des cas [-][-] qui signifie des caract tolérés 
[a-zA-Z0-9&$!?]{8,20}




-->


