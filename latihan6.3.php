<?php
class perulangan{
    public function loop1(){
        for ($baris=1;$baris <=6;$baris++)
        {
            for ($kolom=1;$kolom < $baris; $kolom++)
            {
                echo $kolom."&nbsp;";
            }
            echo "<br />";
        }
    }

public function loop2(){
    for ($baris=1;$baris <=6;$baris++)
    {
        for ($kolom=1;$kolom < $baris; $kolom++)
        {
            echo "*"."&nbsp;";
        }
        echo "<br />";
    }
}
}

$Objekperulangan = new perulangan();
echo "Jenis Perulangan 1 "."<br />";
echo $Objekperulangan->loop1()."<br />";
echo "Jenis Perulangan 2 "."<br />";
echo $Objekperulangan->loop2()."<br />";
?>