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

  function bissextileOrNot($year)
  {
    return date('d', strtotime('last day of feb ' . $year)) == '29';
  }
  var_dump(bissextileOrNot(2000));
  ?>














  <script src="js/jquery-3.5.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/all.min.js"></script>









</body>

</html>