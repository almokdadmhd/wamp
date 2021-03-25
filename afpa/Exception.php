 <!-- le bloc try est le bloc qui sera surveillé ( dans le sens qu il genere une exception ou pas) 
==> l'execution de la fonction devide() va generer une Exception ( throw new Exception("Division by zero");)
la ligne  throw new Exception("Division by zero");
dans la fonction divide(); une fois que l'exception est declenchée au moment de lexecution de la fonction devide,
 c'est le bloc catch qui prend la releve et traite l'exception en gros le mecanisme se fait comme suit :
try (appel de la fonction qui risque de generer une exception) ==> execution de la fonction
 (dont dans sa definition il y a une levee d'exception avec le mot clé throw)  ==> bloc catch pour traiter l'exception
et enfin, un bloc finally (optionnel) qui va s'excuter dans tous les cas  try (surveillance) ==> fonction (levee d'exception) ==> catch (traitement)--> 
<?php
function divide($dividend, $divisor) {
  if($divisor == 0) {
    throw new Exception("Division by zero", 1);
  }
  return $dividend / $divisor;
}

try {
  echo divide(5, 0);
} catch(Exception $ex) {
  $code = $ex->getCode();
  $message = $ex->getMessage();
  $file = $ex->getFile();
  $line = $ex->getLine();
  echo "Exception thrown in $file on line $line: [Code $code]
  $message";
}
?> 

<?php
$age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);

echo json_encode($age);
?>