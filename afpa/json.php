<!-- on vous donne le tab PHP suivant :
$tab=["nom"=>"produit phare","description" => "Le produite phare de notre site",
 "prix" => 1000, "categ" => "PC"];
 -->



<?php

// ma solution: ----> $tab = ["nom" => "produit phare", "description" => "Le produite phare de notre site", "prix" => 1000, "categ" => "PC"];
// var_dump($tab);
// echo '<br>';
// $phpArray = json_decode($tab);
// var_dump($phpArray);
// echo '<br>';
// foreach ($tab as $arr) {
//     echo $arr . '<br>';
// }


// $tab = ["nom" => "produit phare", "description" => "Le produite phare de notre site", "prix" => 1000, "categ" => "PC"];
// var_dump($tab);
// echo '<br>';
// $phpArray = json_encode($tab);
// var_dump($phpArray);
// echo '<br>';
// foreach ($tab as $arr) {
//     echo $arr . '<br>';
// }
$tab = array("nom"=>"produit phare", "description"=>"le produit phare de notre site", "prix"=>1000 ,"categ"=>"pc");

echo json_encode($tab);

// on  vous donne ce tab au format json
// $jsonData=
// '[
    // {"nom":"ballon","description":"un ballon","prix":25, "categ":"jouets"},
    // {"nom" : "PC", "description" :"un PC", "prix" : 1000, "categ" :"informatique"},
    // {"nom" : "tablette", "description" :"une tablette", "prix" : 120, "categ" :"téléphonie"},
    // {"nom" : "aspirateur", "description" :"un aspirateur", "prix" : 200, "categ" :"électroménager"}, ]';
    // on vous demande d'afficher les produits en utilisant le composant card de BS





?>



