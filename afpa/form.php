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
<!-- on vous demande de créer un form qui contient les champs suivants :
nom, prenom, adresse, age, mail, ville, code postal
au moment de l'envoi du formulaire, ces données sont envoyées vers la page trt_form.php 
(ne doivent pas apparaitre dans l'URL) qui les affiche apres leur réception -->

  <form action="trt_form.php" method="post">
    Name: <input type="text" name="name" value="name"><br>
    Prenom: <input type="text" name="prenom" value="prenom"><br>
    Adresse: <input type="text" name="adresse" value="adresse"><br>
    Age: <input type="number" name="age" value="age"><br>
    E-mail: <input type="email" name="email" value="email"><br>
    Ville: <input type="text" name="ville" value="ville"><br>
    CP : <input type="number" name="cp" value="cp"><br>
    <input type="submit" name="valider" value="valider">
  </form>


  <script src="js/jquery-3.5.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/all.min.js"></script>


</body>

</html>