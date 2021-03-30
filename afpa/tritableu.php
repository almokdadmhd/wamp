<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="stylesheet" href="css/all.min.css" />
  <link rel="stylesheet" href="css/bootstrap.min.css" />

  <title>HTML, PHP!</title>
</head>

<body>
  <!-- ex1-
on vous demande ce créer un tab de produits qui a la structure suivante(modifié)
$tab = [
    "id" => ["nom", "descrip", "photo.png"],
  ];
ensuite de generer la liste de produits en utilisant le composant card de BS -->

  <?php
  $jsonData = '[{"nom":"ballon","description":"un ballon","prix":25, "categ":"jouets"},
  {"nom" : "PC", "description" :"un PC", "prix" : 1000, "categ" :"informatique"},
  {"nom" : "tablette", "description" :"une tablette", "prix" : 120, "categ" :"téléphonie"},
  {"nom" : "aspirateur", "description" :"un aspirateur", "prix" : 200, "categ" :"électroménager"}
]';
  $datay = json_decode($jsonData, true);
  $datay1 = $datay;
  // solution tay
  uasort($datay1, function ($item1, $item2) {
    return $item1["prix"] > $item2["prix"];
  });
  var_dump($datay1);
  // solution reyan
  function tri($elem1, $elem2)
  {
    if ($elem1['prix'] == $elem2['prix']) return 0;
    return ($elem1['prix'] > $elem2['prix']) ? 1 : -1;
  }
  uasort($tab, 'tri');

  // $newTab = json_decode($jsonData, true);
  $newTab2 = array_column($newTab, 'prix');
  array_multisort($newTab2, SORT_ASC, $newTab);
  ?>

  <script src="js/jquery-3.5.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/all.min.js"></script>
</body>

</html>