<!-- http://localhost/LetsEngineer/curriculum/4-2/login.php -->
<?php
require_once('db_connect.php');
session_start();

if (!empty($_POST)) {
    if (empty($_POST["name"])) {?>
        <p>名前が未入力です。</p><?php
    }

    elseif (empty($_POST["pass"])) {?>
        <p>パスワードが未入力です。</p> <?php
    }

    if (!empty($_POST["name"]) && !empty($_POST["pass"])) {
        $name = htmlspecialchars($_POST['name'], ENT_QUOTES);
        $pass = htmlspecialchars($_POST['pass'], ENT_QUOTES);
        $pdo = db_connect();
        try {
            $sql = "SELECT * FROM users WHERE name = :name";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':name', $name);
            $stmt->execute();
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
            die();
        }

        if ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            if (password_verify($pass, $row['password'])) {
                $_SESSION["user_id"] = $row['id'];
                $_SESSION["user_name"] = $row['name'];
                header("Location: main.php");
                exit;
            } else {?>
                <p>パスワードに誤りがあります。</p><?php
            }
        } else {?>
            <p>ユーザー名かパスワードに誤りがあります。</p><?php
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
    <title>ログイン画面</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
<!doctype html>
<html lang="ja">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>ログインページ</title>
    </head>
    <body>
        <main>
            <p class=login>ログイン画面</p>
            <button onclick="location.href='signUp.php'"class="signUp_btn">新規ユーザー登録</button>
            <form method="post" action="" id = forms >
                <input type="text" name="name" class="user" placeholder="ユーザー名"><br><br>
                <input type="password" name="pass" class="pass" placeholder="パスワード"><br><br>
                <input type="submit" value="ログイン" class="login_btn">
            </form>
        </main>
        
    </body>
</html>
</body>
</html>