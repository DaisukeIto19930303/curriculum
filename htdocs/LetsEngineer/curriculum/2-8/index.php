<!-- http://localhost/LetsEngineer/curriculum/2-8/index.php -->
<?php
$fruits = ["りんご","みかん","もも"];

foreach ($fruits as $value){
    echo $value;
}
echo '<br>';
$fruits = ["apple"=>"りんご","orange"=>"みかん","peach"=>"もも"];

foreach($fruits as $key => $value){
    echo $key.'と言ったら'.$value.'<br/>';
}
?>