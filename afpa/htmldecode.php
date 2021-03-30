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
  $tab = json_decode($jsonData, true);
  // ce tab est un tab indexé (donc des cases ayant des index 0,1,2,3 .... etc)
  var_dump($tab);
  ?>
  <div class="container">
    <div class="row">
      <?php
      // du coup, on utilise la variante des tab indexés de foreach
      //  je constate que $produit est tab associatif, et pour acceder à ses données, il faut que je passe par des cles
      foreach ($tab as $cle => $produits) {
      ?>
        <div class="card col-md-3" style="width: 18rem;">
          <div class="card-body">
            <!-- pour récupérer le nom : je fais $produit['nom'] et je les affiche comme suit :
            echo $produit['nom']."<br>"; echo $produit['description'] . "<br>";etc ... -->
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