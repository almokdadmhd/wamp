<?php
require_once 'connexion.php';

$cnx= connexion();
var_dump($cnx);
?>
<?php
$host = "127.0.0.1";
$user = "root";
$password = "12345";
$database = "admins";
$connect = mysqli_connect($host, $user, $password, $database);
if (mysqli_connect_errno()) {
    die("cannot connect to database field:" . mysqli_connect_errno());
} else {
    echo 'database is connected';
}
?>
<form action='' method="POST">
user name: <input type="text" name="username">
<br>
password: <input type="password" name="password">
<br>
<input type="submit" name="submit" value="insert">
<br>
   
</form>


</body>

</html>