<!-- http://localhost/LetsEngineer/curriculum/4-2/signUp.php -->
<?php

require_once('db_connect.php');

if (isset($_POST["signUp"])) {
    $name = $_POST['name'];
    $password = $_POST['password'];
    if(empty($name)){?>
        <p> 名前を入力してください</p><?php
    }else if(empty($password)){?>
        <p>パスワードを入力して下さい</p><?php
    } elseif (!empty($_POST["name"])&&!empty($_POST["password"])) {
    
        $sql = "INSERT INTO users (name, password) VALUES ('$name',:password)";
        $pdo = db_connect();
        try {
            $stmt = $pdo->prepare($sql);
            $password_hash = password_hash($password, PASSWORD_DEFAULT);
            $stmt->bindValue(':password', $password_hash);
            $stmt->execute();
            header("Location:login.php");
        } catch (PDOException $e) {
            echo '接続エラー: ' . $e->getMessage();
            die();
        } 
    } 
}

?>

<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ユーザー登録</title>
    <link rel="stylesheet" href="signUp.css">
</head>
<body>
    <div id = main>
        <h1>ユーザー登録画面</h1>
        <form method="POST" action="signUp.php" id="form">
            <input type="text" name="name" id="name" placeholder="ユーザー名">
            <br>
            <input type="password" name="password" id="password" placeholder="パスワード"><br>
            <input type="submit" value="新規登録" id="signUp" name="signUp" >
        </form>
    </div>
    
</body>
</html>