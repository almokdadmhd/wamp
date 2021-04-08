<!-- créer un trait qui s'appelle Affichage et qui contient une fonction affichTrait() qui affiche "je suis un trait" 
 créer une classe utilisTrait qui contient une fonction affichClasse() qui affiche "affichge de classe"
 instancier la classe  utilisTrait et appliquer les méthodes affichTrait et affichClasse
 -->


<?php
trait affichage{
    public function afficheTrait() {
      echo  "je suis un trait"; 
    }
  }
  class TestTrait {
    use affichage;
    public function afficheClasse(){
        echo "fonction affiche classe";
  
    }
  }
  $obj = new TestTrait();
  $obj->afficheClasse();
  
  $obj->afficheTrait();

?>

