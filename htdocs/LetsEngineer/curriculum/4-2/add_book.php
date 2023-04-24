<!-- http://localhost/LetsEngineer/curriculum/4-2/add_book.php -->

<?php
require_once('db_connect.php');
require_once('function.php');

check_user_logged_in();

if (isset($_POST["post"])) {
        if (empty($_POST["title"])) {?>
            <p>タイトルが未入力です</p>
        <?php
        } elseif (empty($_POST['date'])) {?>
            <p>発売日が未入力です。</p>
        <?php
        }elseif (empty($_POST['stock'])) {?>
            <p>在庫数が未選択です。</p><?php
        }

    if (!empty($_POST["title"])&&!empty($_POST["date"])&&!empty($_POST["stock"])) {
        $title = $_POST['title'];
        $date = $_POST['date'];
        $stock = $_POST['stock'];
        

        $pdo = db_connect(); 

        try {
            $sql = "INSERT INTO books (title,date,stock) VALUES (:title,:date,:stock)";
            
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(':title', $title);
            $stmt->bindValue(':date', $date);
            $stmt->bindValue(':stock', $stock);
            $stmt->execute();
            header("Location: main.php");
        } catch (PDOException $e) {
            echo '失敗: ' . $e->getMessage();

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
    <title>本登録</title>
    <link rel="stylesheet" href="add_book.css">
</head>
<body>
    <div>
    <h1>本 登録画面</h1>

    <form method="POST" action="" id="form">
        <input type="text" name="title" id="title" placeholder="タイトル">
        <br>
        <input type="text" name="date" id="date" onfocus="this.type='date'" onfocusout="this.type='text'" placeholder="発売日"><br>
        在庫数<br>
        <select name="stock" id="stock" >
            <option value="">選択してください</option>
            <?php 
            $i = 1;
            while($i <= 99){?>
            <option value="<?php echo $i;?>"><?php echo $i; ?></option>
            <?php $i++;}?>
        </select>
        <br>
        <input type="submit" value="登録" id="post" name="post">
    </form>
    </div>
</body>
</html>