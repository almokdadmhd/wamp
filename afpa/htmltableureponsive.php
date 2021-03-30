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
  <!-- ex pour ce soir, il faut ajouter des champs photos dans le tab
$jsonData=
'[
    {"nom":"ballon","description":"un ballon","prix":25, "categ":"jouets"},
    {"nom" : "PC", "description" :"un PC", "prix" : 1000, "categ" :"informatique"},
    {"nom" : "tablette", "description" :"une tablette", "prix" : 120, "categ" :"téléphonie"},
    {"nom" : "aspirateur", "description" :"un aspirateur", "prix" : 200, "categ" :"électroménager"}
]';
faire un affichage responsive (pc, tablette, mobile) en utilisant le composant card -->

  <?php
  $jsonData =
    '[
    {"nom":"ballon","description":"un ballon","prix":25, "categ":"jouets","image":"ballon.jpg"},
    {"nom" : "PC", "description" :"un PC", "prix" : 1000, "categ" :"informatique","image": "PC.jpg"},
    {"nom" : "tablette", "description" :"une tablette", "prix" : 120, "categ" :"téléphonie","image": "tablette.jpg"},
    {"nom" : "aspirateur", "description" :"un aspirateur", "prix" : 200, "categ" :"électroménager","image":"aspirateur.jpg"}
]';
  ?>
  <div class="container">
    <?php
    $tab = json_decode($jsonData, true);

    foreach ($tab as $ligne) {

    ?>
      <div class="card col-md-3" style="width: 18rem;">
        <img src="images/<?php echo $ligne["image"] ?>"  class="card-img-top" alt=".."> <br>
        <div class="card-body">
          <h5 class="card-title"><?php echo $ligne["nom"] ?></h5>
          <h6 class="card-subtitle mb-2 text-muted"><?php echo $ligne["prix"] ?></h6>
          <p class="card-text"><?php echo $ligne["description"] ?></p>
          <a href="#" class="card-link"><?php echo $ligne["categ"] ?></a>
        </div>
      </div>
    <?php
    }
    ?>
  </div>
  </div>
  <script src="js/jquery-3.5.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/all.min.js"></script>
</body>

</html>