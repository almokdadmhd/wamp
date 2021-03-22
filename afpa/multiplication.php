<? php
function tablmulti()
{
    $x = "";
    for ($i = 1; $i <=10; $i++) {
        echo "$i :";
        for ($j = 1; $j <=10; $j++) {
            echo "-----" . ($i * $j) . "-----";
        }
echo "<br/>";
    }

};
tablmulti();
? >

