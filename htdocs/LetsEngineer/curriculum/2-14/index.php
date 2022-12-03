<!-- http://localhost/LetsEngineer/curriculum/2-14/index.php -->
<?php
// count（要素の数を数える）
$fruit = ["grape","apple","lemon","orange"];
echo count($fruit);
echo "<br>";
// sort（要素の並べ替え）
$fruit = ["grape","apple","lemon","orange"];
sort($fruit);
var_dump($fruit);
echo "<br>";
// in_array（配列に中にある要素が存在しているか）
$fruit = ["grape","apple","lemon","orange"];
if (in_array("apple",$fruit)){
    echo"りんごは置いてますよ！";
}else{
    echo"りんごは置いてないです....";
}
echo "<br>";
// implode（配列を結合して文字列に変換
$fruit = ["grape","apple","lemon","orange"];
$atstr = implode("@", $fruit);
var_dump($atstr);
echo "<br>";
// explode（文字列を指定の区切りで配列にする）
$fruit = ["grape","apple","lemon","orange"];
$atstr = implode(",", $fruit);
var_dump($atstr);
echo "<br>";
$re_fruit = explode(",", $atstr);
var_dump($fruit);
echo "<br>";
?>