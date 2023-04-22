<!-- http://localhost/LetsEngineer/curriculum/4-1/signUp.php -->

<?php


require_once('db_connect.php');

if (isset($_POST["signUp"])) {
    $name = $_POST['name'];
    $password = $_POST['password'];
    if(empty($name)){
        echo "名前を入力してください";
    }else if(empty($password)){
        echo "パスワードを入力して下さい";
    } elseif (!empty($_POST["name"])&&!empty($_POST["name"])) {
    
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
<html>
<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
    <h1>新規登録</h1>
    <form method="POST" action="signUp.php">
        user:<br>
        <input type="text" name="name" id="name">
        <br>
        password:<br>
        <input type="password" name="password" id="password"><br>
        <input type="submit" value="submit" id="signUp" name="signUp">
    </form>

</body>
</html>