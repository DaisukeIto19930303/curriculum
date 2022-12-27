<?php
// セッション開始
session_start();
// データベース名
define('DB_DATABASE', 'YIGroupBlog');
// MySQLのユーザー名
define('DB_USERNAME', 'root');
// MySQLのログインパスワード
define('DB_PASSWORD', 'root');
// DSN
define('PDO_DSN', 'mysql:host=localhost;charset=utf8;dbname='.DB_DATABASE);
?>
