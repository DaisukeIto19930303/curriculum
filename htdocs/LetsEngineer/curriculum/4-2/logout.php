<!-- http://localhost/LetsEngineer/curriculum/4-2/logout.php -->
<?php
session_start();
$_SESSION = array();
session_destroy();

header("Location: login.php");
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>ログアウト</title>
</head>
    <body>
    </body>
</html>