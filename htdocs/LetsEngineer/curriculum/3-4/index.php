<!-- http://localhost/LetsEngineer/curriculum/3-4/index.php -->
<?php
    require_once("getData.php");
    $db = new getData();
    $user = $db->getUserData();
    $data = $db->getPostData()->fetchAll(PDO::FETCH_ASSOC);
    // var_dump($user);
    // var_dump($data);
    
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3章チェックテスト</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <div class = "header clearfix" >
            <div class = "logo_bg">
                <img src="img/logo.png" alt="" class = "logo">
            </div>

            <div class = header_left>
                <div class = name_bg>
                    <div class = name>ようこそ
                        <?php 
                            echo $user["last_name"];
                            echo $user["first_name"];
                        ?>
                            さん
                    </div>
                </div>

                <div class = last_date_bg>
                    <div class = date> 最終ログイン日：
                        <?php echo $user["last_login"];
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main>
        <table> 
            <tr>
                <th>記事id</th>
                <th>タイトル</th>
                <th>カテゴリ</th>
                <th>本文</th>
                <th>投稿日</th>
            </tr>
                <?php foreach($data as $array){
                        if ($array ["category_no"] == 1){
                            $array["category_no"]  = "食事";
                        } else if ($array ["category_no"] == 2) {
                            $array["category_no"]  = "旅行";
                        } else if ($array ["category_no"] == 3){
                            $array["category_no"]  = "その他";
                        };
                    ?> 
                    <tr>
                        <?php foreach($array as $value){
                            ?> 
                            <td class = cell>
                                <?php echo $value;?>
                            </td>
                        <?php } ?>
                    </tr>
                <?php } ?>  
            
        </table>
    </main>

    <footer>
            Y&I group.inc
    </footer>
</body>
</html>