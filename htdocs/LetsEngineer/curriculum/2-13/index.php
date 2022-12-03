<!-- http://localhost/LetsEngineer/curriculum/2-13/index.php -->
<?php
// ceil（切り上げ）
$x = 9.1;
echo ceil($x);
echo '<br>';
//floor（切り捨て）
$x = 7.9;
echo floor($x);
echo '<br>';
// round（四捨五入）
$x = 7.5;
echo round($x);
echo '<br>';
// pi（円周率）
echo pi();
function circleArea($r) {
    $circle_area = $r * $r * pi();
    echo $circle_area; 
}
circleArea(7);
echo '<br>';
// mt_rand（乱数）
echo mt_rand(0,999);
echo '<br>';
// strlen（文字列の長さ）
$str="はごろもフーズ";
echo strlen($str);
echo '<br>';
//strpos（検索）
$str = "daisuke";
echo strpos($str,"a");
echo '<br>';
// substr（文字列の切り取り）
$str = "yoneyama";
echo substr($str,4,4);
echo '<br>';
// str_replace（置換）
$str = "daisuke";
echo str_replace("da", "DO", $str);
echo '<br>';
// printf（フォーマット化した文字列を出力）
$date = "明日";
$subject = "一限目";
$menu = "体育";
printf("%sの%sは%sです",$date,$subject,$menu);
// sprintf（変数に代入できるprintf）
echo '<br>';
$limit_hour = 8;
$limit_minute = 48;
$limit_time = sprintf("日の出まで%02d時間%02d分", $limit_hour, $limit_minute);
echo $limit_time;
?>