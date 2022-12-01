<!-- http://localhost/LetsEngineer/curriculum/2-10/index.php -->
<?php
function getRectangularVolume($vertical,$beside,$height){
    $volume = $vertical*$beside*$height;
    print"直方体の体積は".$volume."だよ。";
}
getRectangularVolume(5,10,8);
?>