 <!-- http://localhost/LetsEngineer/curriculum/2-17/question2.php -->
 <?php
date_default_timezone_set('Asia/Tokyo');
$time=intval(date("H"));
printf("今%s時台です",$time);
echo'<br>';
 if(4<=$time&&$time<=10){
    echo "おはようございます";
 }elseif(11<=$time&&$time<=17){
    echo "こんにちは";
 }elseif(18<=$time||$time<=3){
    echo "こんばんは";
 }else{
    
 };

 ?>