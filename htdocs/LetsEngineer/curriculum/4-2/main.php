<!-- http://localhost/LetsEngineer/curriculum/4-2/main.php -->
<?php
require_once('db_connect.php');
require_once('function.php');
check_user_logged_in();
$sql = "SELECT * FROM books ";
$pdo = db_connect();
try {
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
} catch (PDOException $e) {
        echo 'Error: ' . $e->getMessage();
        die();
    }

?>

<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>在庫一覧</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <div id = main_header>
        <h1>在庫一覧画面</h1>
        <button onclick="location.href='add_book.php'"class="add_btn">新規登録</button>
        <button onclick="location.href='logout.php'"class="logout_btn">ログアウト</button>
    </div>
        <table id = "stock_list">
        <tr class = tab>
            <td>タイトル</td>
            <td>発売日</td>
            <td>在庫数</td>
            <td></td>
        </tr>
        <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
            <tr class="stock">
                <td><?php echo $row['title'];?></td>
                <td><?php echo $row['date'];?></td>
                <td><?php echo $row['stock'];?></td>
                <td><a href="delete_books.php?id=<?php echo $row['id']; ?>" class="delete_btn">削除</a></td>
            </tr>
            <?php } ?>
    </table>
</body>
</html>