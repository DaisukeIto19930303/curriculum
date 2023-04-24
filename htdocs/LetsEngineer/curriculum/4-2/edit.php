<?php
require_once('db_connect.php');
require_once('function.php');

check_user_logged_in();

$id = $_GET['id'];
if (empty($id)) {
    header("Location: main.php");
    exit;
}

$pdo = db_connect();

try {
    // SQL文の準備
    $sql = "SELECT * FROM books WHERE id = :id";
    // プリペアドステートメントの作成
    $stmt = $pdo->prepare($sql);
    // idのバインド
    $stmt->bindParam(':id', $id);
    $stmt->execute();
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
    die();
}

if ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $id = $row['id'];
    $title = $row['title'];
    $date = $row['date'];
} else {
    echo "対象のデータがありません。";
}

if (isset($_POST["post"])) {
    // if (empty($_POST["title"])) {
    //     echo 'タイトルが未入力です。';
    // } elseif (empty($_POST['date'])) {
    //     echo '発売日が未入力です。';
    // }elseif (empty($_POST['stock'])) {
    //     echo '在庫数が未選択です';
    // }

    if (!empty($_POST["title"])&&!empty($_POST["date"])&&!empty($_POST["stock"])) {
        $title = $_POST['title'];
        $date = $_POST['date'];
        $stock = $_POST['stock'];
        

        $pdo = db_connect(); 

        try {
            $sql = "UPDATE books SET title = :title, date = :date, stock = :stock WHERE id = :id";
            
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':title', $title);
            $stmt->bindParam(':date', $date);
            $stmt->bindParam(':stock', $stock);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            header("Location: main.php");
        } catch (PDOException $e) {
            exit('データベース接続失敗。' . $e->getMessage());
        
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
    <h1>本 変更画面</h1>

    <form method="POST" action="" id="form">
        <input type="hidden" name="id" value="<?php echo $id; ?>" >
        <input type="text" name="title" id="title" value=<?php echo $title; ?>>
        <br>
        <input type="date" name="date" id="date" value=<?php echo $date; ?>><br>
        在庫数<br>
        <select name="stock" id="stock" >
            <option value="">変更数</option>
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
    <script>
        <?php
        if (isset($_POST["post"])) {
            if (empty($_POST["title"])) {?>
                alert ("タイトルが未入力です");
            <?php
            } elseif (empty($_POST['date'])) {?>
                alert("発売日が未入力です。");
            <?php
            }elseif (empty($_POST['stock'])) {?>
                alert("在庫数が未選択です。");<?php
            }
        }
        ?>
    </script>
</body>
</html>