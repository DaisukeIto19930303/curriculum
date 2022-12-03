 <!-- http://localhost/LetsEngineer/curriculum/2-17/question1.php -->
 <?php
//  試行回数
$count = 0;
// 合計値
$sum = 0;
do{
// 乱数
$dice = mt_rand(1,6);
$count++;
printf("%d回目=%d",$count,$dice);
echo '<br>';

$sum+=$dice;
}while($sum<41);
printf("合計%d回でゴールしました",$count);
 ?>