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
  $tab = [
    "1" => ["philippe", "Girard", "image2.png"],


  ];
  ?>
  <div class="container">>
    <div class="row">
      <?php
      foreach ($tab as $cle => $personne) {
      ?>

        <div class="card " style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title"> <?php echo $personne[1]  ?></h5>
            <p class="card-text"><?php echo $personne[0]  ?></p>

            <?php
            echo " La date " . date("Y/m/d") . "<br>";
            echo " Aujourd'hui" . date("l") . "<br>";
            $d = mktime(11, 14, 54, 8, 12, 2014);
            echo "Created date is " . date("Y-m-d h:i:sa", $d) . "<br>";
            echo "Created date is " . date("d-m-Y h:i:sa", $d) . "<br>";
            echo "Created date is " . date("d-m-Y h:i:s", $d) . "<br>";

            ?>
            <?php
            $d = strtotime("10:30pm April 15 2014");
            echo "Created date is " . date("Y-m-d h:i:sa", $d);
            $d = strtotime("tomorrow");
            echo date("Y-m-d h:i:sa", $d) . "<br>";

            $d = strtotime("next Saturday");
            echo date("Y-m-d h:i:sa", $d) . "<br>";

            $d = strtotime("+3 Months");
            echo date("Y-m-d h:i:sa", $d) . "<br>";
            $d = strtotime("10:30pm April 15 2014");
            var_dump($d);
            $d = strtotime("2015-08-12");
            var_dump($d);

            $d1 = strtotime("July 04");
            $d2 = ceil(($d1 - time()) / 60 / 60 / 24);
            echo "There are " . $d2 . " days until 4th of July.";
            ?>



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