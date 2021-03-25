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
[09:17]
on vous demande ce créer un tab de produits qui a la structure suivante(modifié)
[09:18]
$tab = [
    "id" => ["nom", "descrip", "photo.png"],
  ];
[09:19]
ensuite de generer la liste de produits en utilisant le composant card de BS -->

  <?php
  $jsonData =
    '[
    {"nom":"ballon","description":"un ballon","prix":25, "categ":"jouets"},
    {"nom" : "PC", "description" :"un PC", "prix" : 1000, "categ" :"informatique"},
    {"nom" : "tablette", "description" :"une tablette", "prix" : 120, "categ" :"téléphonie"},
    {"nom" : "aspirateur", "description" :"un aspirateur", "prix" : 200, "categ" :"électroménager"}
]';
  $tay = json_decode($jsonData, true);
  ?>
  <div class="container">
    <div class="row">
      <?php
      foreach ($tay as $cle => $produits) {
      ?>
        <div class="card col-md-3" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title"><?php echo $produits["nom"] ?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?php echo $produits["prix"] ?></h6>
            <p class="card-text"><?php echo $produits["description"] ?></p>
            <a href="#" class="card-link"><?php echo $produits["categ"] ?></a>
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