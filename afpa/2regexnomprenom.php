<!-- Ex2 2eme Regex- pareil (toujours fonction qui teste une regex) nom de personne : ne doit contenir que des lettres -->
<?PHP
function nomPersonne($nome){
    if(preg_match('#[a-zA-z]+[^0-9]#',$nome)==true){
        echo "le nom est correct";
    }
    else{
        echo "le nom entreé est incorrecte";
    }
}
?>