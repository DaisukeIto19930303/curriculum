<?php 
//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成
$my_name= $_POST['my_name'];
$question1 = $_POST['question1'];
$question2= $_POST['question2'];
$question3 = $_POST['question3'];
$answer1= $_POST['answer1'];
$answer2= $_POST['answer2'];
$answer3= $_POST['answer3'];

// var_dump($_POST);
//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する
function answer_result($question,$answer){
    if($answer == $question ){
        $result = "正解!!";
    }else{
        $result = "不正解...";
    };
    echo $result;
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="answer.css">
</head>
    <body id = "main_content">
        <p><?php echo $my_name ?>さんの結果は・・・？</p>
        <p>①の答え</p>
        <?php       
            answer_result($question1,$answer1);
        ?>
        <!--作成した関数を呼び出して結果を表示-->
        <p>②の答え</p>
        <?php
            answer_result($question2,$answer2);
        ?>
        <!--作成した関数を呼び出して結果を表示-->
        <p>③の答え</p>
        <?php
            answer_result($question3,$answer3);
        ?>
        <!--作成した関数を呼び出して結果を表示-->
    </body>
</html>