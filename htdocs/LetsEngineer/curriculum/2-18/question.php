<?php
//POST送信で送られてきた名前を受け取って変数を作成
$my_name = $_POST['my_name'];
//①画像を参考に問題文の選択肢の配列を作成してください。
$question1 = ["80", "22", "20", "21"];
$question2 = ["PHP", "Python", "JAVA", "HTML"];
$question3 = ["join", "select", "insert", "update"];
//② ①で作成した、配列から正解の選択肢の変数を作成してください
$answer1 = $question1[0];
$answer2 = $question2[3];
$answer3 = $question3[2];

// var_dump($_POST);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="question.css">
    </head>
<body id="main_content">
    <main>
        <p>お疲れ様です<?php echo $my_name?>さん</p>
        <!--フォームの作成 通信はPOST通信で-->
        <h2>①ネットワークのポート番号は何番？</h2>
        <!--③ 問題のradioボタンを「foreach」を使って作成する-->
        <form action="answer.php" method="post">
            <?php
            foreach ($question1 as $value) {?>
                <input type="radio" name="question1" value = "<?php echo $value;?>"/><?php echo $value;}?>

            <h2>②Webページを作成するための言語は？</h2>
            <!--③ 問題のradioボタンを「foreach」を使って作成する-->

            <?php
            foreach ($question2 as $value) {?>
                <input type="radio" name="question2" value = "<?php echo $value;?>"/><?php echo $value;}?>

                <h2>③MySQLで情報を取得するためのコマンドは？</h2>
            <!--③ 問題のradioボタンを「foreach」を使って作成する-->

            <?php
            foreach ($question3 as $value) {?>
                <input type="radio" name="question3" value = "<?php echo $value;?>"/><?php echo $value;}?>


            <!--問題の正解の変数と名前の変数を[answer.php]に送る-->

            <input type="hidden" name="my_name" value="<?php echo $my_name;?>" />
            <input type="hidden" name="answer1" value="<?php echo $answer1;?>" />
            <input type="hidden" name="answer2" value="<?php echo $answer2;?>" />
            <input type="hidden" name="answer3" value="<?php echo $answer3;?>" />
            </br>
            <input class="button" type="submit" value="回答する" />
            
        </form>
    </main>
    </body>
</html>