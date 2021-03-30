<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="stylesheet" href="css/all.min.css" />
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/cssmaxcence.css" />


  

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
$jsonData3=
'[
    {"nom":"ballon","description":"un ballon","prix":25, "categ":"jouets"},
    {"nom" : "PC", "description" :"un PC", "prix" : 1000, "categ" :"informatique"},
    {"nom" : "tablette", "description" :"une tablette", "prix" : 120, "categ" :"téléphonie"},
    {"nom" : "aspirateur", "description" :"un aspirateur", "prix" : 200, "categ" :"électroménager"}
]';

$tab3 = json_decode($jsonData3, true);
$nouvellevaleur = "";
foreach($tab3 as $pdt3){
  $nouvellevaleur="images_PHP/".$pdt3["nom"].".jpg";
  $pdt3['image'] = $nouvellevaleur;


?>
    <div class="col-md-3 col-6 col-sm-6 col-l-3 col-xl-3 cardboot divboot">
  <div class="card  cardboot" >
  <img class="card-img-top" src="<?php echo $pdt3["image"]?>"alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><?php echo $pdt3["nom"]?></h5>
    <p class="card-text"><?php echo $pdt3["description"]?></p>
    <p class="card-text"><?php echo $pdt3["prix"]?></p>
    <p class="card-text"><?php echo $pdt3["categ"]?></p>
    <a href="#" class="btn btn-primary">Acheter</a>
  </div>
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