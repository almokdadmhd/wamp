<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="stylesheet" href="css/all.min.css" />
  <link rel="stylesheet" href="css/bootstrap.min.css" />

  <title>Hello, world!</title>
</head>

<body>

  <?php
  // 1eme ma solution:
  // 1- j ai utilisé  la fonction  (strtotime) spécifie comment formater la date
  // 2- Ensuite, j'ai fixé une valeur en fonction du jour à calculer (Next Saturday)
  // 3- j ai fixé un boucle pour Vérifier le condition (while)
  // 4- J'afichier tout ce que je veux



  $startdate = strtotime(" Next Saturday");
  $enddate = strtotime("+1 weeks", $startdate);
  while ($startdate < $enddate) {
    echo date("h:i:sa M d y", $startdate) . "<br>";
    $startdate = strtotime("+1 week", $startdate);
  }


  
  // 2 eme cette solution proche de ma solution:
  function leWek()
  {
    $startdate = strtotime("Saturday");
    $startdates = strtotime("Sunday");
    $enddate = strtotime("-4 weeks", $startdate);
    $enddates = strtotime("-4 weeks", $startdates);
    while ($startdate  > $enddate && $startdates > $enddates) {
      echo date("M d", $startdate) . " Samedi <br>";
      echo date("M d", $startdates) . " Dimanche <br>";
      $startdate = strtotime("-1 week", $startdate);
      $startdates = strtotime("-1 week", $startdates);
    }
  }
  echo leWek();

  ?>
<!--    3eme شرح الحل تبع ريان الصعب شوي  -->

  <!--  1eme  sulotion de reyan -->
  <!-- si on veut récupérer le 1er du mois -->
  <!-- supposons que je veux recupérer la date du 1er du mois en cours -->
  <!-- la date du mois en cours = 01/03/2021 -->
  <!-- comment je peux créer ça ? -->
  <!-- c via la fonction mktime(h,m,s, mois, jour, annee) -->
  <!-- dans mon cas je fais -->
  <!-- mktime(0,0,0, date("m"), 01, date("Y")) -->
  <!-- pour les heures, minutes, secondes, je mets des 0 -->
  <!-- pour récupérer le mois en cours, j utilse la fonction date() avec le param "m" -->
  <!-- puis pour le jour, je mets 01, pour le 1er du mois -->
  <!-- et pour l'année, pareil que le mois, date("Y") -->
  <!-- ce qui me donne ça -->
  <!-- mktime(0, 0, 0, date("m"), 01, date("Y")) -->
  <!-- ==> au format timestamp -->
  <!-- je veux le convertir en date avec formatage francophone j utilise la fonction date avec le format souhaité -->
  <!-- comme ça j'aurai la date de début du mois en cours-->
  <!-- je fais pareil pour la date de fin (je la definis au debut du mois prochain) -->
  <!-- ensuite j'essaye de deduire le 1er samedi -->
  <!-- je teste tt d'abord si le 1er du mois est un samedi ou pas -->
  <!-- si oui, smedi = date_deb -->
  <!-- sinon je cherche le samedi le plus proche  et pareil pour dimanche-->
  <!-- date("l", $date_deb) === "Saturday" ? $samedi = $date_deb : $samedi = strtotime("next Saturday", $date_deb); -->
  <!-- date("l", $date_deb) === "Sunday" ? $dimanche = $date_deb : $dimanche = strtotime("next Sunday", $date_deb); -->
  <!-- ensuite je vais parcourir tous les weekends du mois, donc je pense à une boucle, while peut faire l'affaire -->
  <!-- while ($samedi < $date_fin && $dimanche < $date_fin) { -->
  <!-- echo date("d-m-Y", $samedi) . "<br>"; -->
  <!-- echo date("d-m-Y", $dimanche) . "<br>"; -->
  <!-- $samedi = strtotime("next Saturday", $samedi); -->
  <!-- $dimanche = strtotime("next Sunday", $dimanche);} -->
  <!-- la condition de while est tant que les dates des samedis et dimanches sont < au 1er du mois prochain, je fais ceci -->
  <!-- -j'affiche le weekend en cours (samedi et dimanche) -->
  <!-- je les decale d'une semaine pour avoir les weekends prochains -->

  <?php
  $date_deb = strtotime(date("d-m-Y", mktime(0, 0, 0, date("m"), 01, date("Y"))));
  $date_fin = strtotime(date("d-m-Y", mktime(0, 0, 0, date("m") + 1, 01, date("Y"))));

  date("l", $date_deb) === "Saturday" ? $samedi = $date_deb : $samedi = strtotime("next Saturday", $date_deb);
  date("l", $date_deb) === "Sunday" ? $dimanche = $date_deb : $dimanche = strtotime("next Sunday", $date_deb);

  while ($samedi < $date_fin && $dimanche < $date_fin) {
    echo date("d-m-Y", $samedi) . "<br>";
    echo date("d-m-Y", $dimanche) . "<br>";
    $samedi = strtotime("next Saturday", $samedi);
    $dimanche = strtotime("next Sunday", $dimanche);
  }

  echo "<br>";

// 4em solution de maryan 
$deb=strtotime("first Saturday of August");
$dim=strtotime("first Sunday of August");
$fin=strtotime("last day of August", $deb);

while ($deb < $fin) {

   echo date("d M Y", $deb) . "<br>";
  echo date("d M Y", $dim) . "<br>";
  $deb = strtotime("+1 week", $deb);
  $dim = strtotime("+1 week", $dim);

  }
?>
<?php
$deb=strtotime("first Saturday of this month");
$dim=strtotime("first Sunday of this month");
$fin=strtotime("last day of this month", $deb);

while ($deb < $fin) {

   echo date("d M Y", $deb) . "<br>";
  echo date("d M Y", $dim) . "<br>";
  $deb = strtotime("+1 week", $deb);
  $dim = strtotime("+1 week", $dim);

  }

  

  
  


  


  ?>























  </div>
  </div>

  </div>
  </div>
















  <script src="js/jquery-3.5.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/all.min.js"></script>









</body>

</html>