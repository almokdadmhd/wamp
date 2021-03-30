<?php
$str = "Visit W3Schools";
$pattern = "/w3schools/i";
echo preg_match($pattern, $str); // Outputs 1
?>
<br>
<?php
$str = "The rain in SPAIN falls mainly on the plains.";
$pattern = "/ain/i";
echo preg_match_all($pattern, $str); // Outputs 4
?>
<br>


<?php
$str = "Visit Microsoft!";
$pattern = "/microsoft/i";
echo preg_replace($pattern, "W3Schools", $str); // Outputs "Visit W3Schools!"
?>

ex pour ce soir, il faut ajouter des champs photos dans le tab
[17:07]
$jsonData=
'[
    {"nom":"ballon","description":"un ballon","prix":25, "categ":"jouets"},
    {"nom" : "PC", "description" :"un PC", "prix" : 1000, "categ" :"informatique"},
    {"nom" : "tablette", "description" :"une tablette", "prix" : 120, "categ" :"téléphonie"},
    {"nom" : "aspirateur", "description" :"un aspirateur", "prix" : 200, "categ" :"électroménager"}
]';