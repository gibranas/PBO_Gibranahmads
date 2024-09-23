<?php
for ($i = 1; $i <= 5; $i++) { 
    for ($j = 5; $j > $i; $j--) {
        echo "&nbsp;&nbsp;";
    }
    for ($j = 1; $j <= (2 * $i); $j++) {
        echo " * ";
    }
    
    echo "<br />";
}
echo "<br />";

class perulangan{
    public function loop(){
        $array = array ('*','**','***','****','*****','*****','****','***','**','*');
        foreach ($array as $key) {
            echo $key."<br />";
        }
    }
}

$Objekperulangan = new perulangan();
echo "Segetiga Ke2 : "."<br />";
echo $Objekperulangan->loop()."<br />";

echo "<br />";


?>
