

<?php
//POST送信で送られてきた名前を受け取って変数を作成
$my_name = $_POST['my_name'];
//①画像を参考に問題文の選択肢の配列を作成してください。
$question1 = ["80","22","20","21"];
$question2 = ["PHP","Python","JAVA","HTML"];
$question3 = ["join","select","insert","update"];

//② ①で作成した、配列から正解の選択肢の変数を作成してください
// $answer = [$question1=>$question1[0];$question2=>$question2[3];$question3=>$question3[1];]
?>
<p>お疲れ様です<?php echo $my_name; ?>さん</p>
<!--フォームの作成 通信はPOST通信で-->
<h2>①ネットワークのポート番号は何番？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->

<?php 
foreach ($question1 as $value) {?>
    <input type="radio" name="question1" value= $value ><?php echo $value;}?>
   

<h2>②Webページを作成するための言語は？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->

<?php 
foreach ($question2 as $value) {?>
    <input type="radio" name="question2" value= $value ><?php echo $value;}?>

<h2>③MySQLで情報を取得するためのコマンドは？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->

<?php 
$your_ans3. = foreach ($question3 as $value) {?>
    <input type="radio" name="question3" value= $value ><?php echo $value;}?>

<!--問題の正解の変数と名前の変数を[answer.php]に送る-->
<form  action = "answer.php" method = "POST">
    <input type="hidden" name="name" $value="<?php echo = "伊東大輔" ?>"/>
    <input type="submit" value="回答" />
</form>