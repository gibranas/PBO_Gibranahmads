<?php
class perulangan{
    public function loop(){
        for($i = 15;$i > 0;$i--)
        {
            echo $i;
            echo "<br/>";
        }
    }
}

$Objekperulangan = new perulangan();
echo "Jenis Perulangan Lainnya "."<br />";
echo $Objekperulangan->loop()."<br />";
?>