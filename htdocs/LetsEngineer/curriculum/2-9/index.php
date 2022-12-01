<!-- http://localhost/LetsEngineer/curriculum/2-9/index.php -->
<?php
   for($i=1;$i<101;$i++) { 
    echo '<br>';
    if($i % 3 === 0 && $i % 5 === 0){
        echo 'Fizz Bazz';
    }elseif($i % 3 === 0){
        echo'Fizz';
    }
    elseif($i % 5 === 0){
        echo'bazz';
    }
    else {
        echo $i;
    }
}

?>


