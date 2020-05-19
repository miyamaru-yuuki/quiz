<?php
session_start();
session_regenerate_id(true);
setcookie(session_name(),session_id(),time()+60*60*24*3);

require_once ('function.php');
require_once ('recordtable_class.php');

if(!isset($_POST['name'],$_SESSION['count'])){
    header("Location: http://mmr.e5.valueserver.jp/quiz/index.php?error=1");
    exit();
}
$name = $_POST['name'];
$count = $_SESSION['count'];

$recordTable = new recordTable(db());
$recordTable->add($name,$count);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=yes">
    <title><?php echo title(); ?></title>
    <style>
    </style>
    <link rel="stylesheet" type="text/css" href="<?php echo css(); ?>">
</head>
<body>
<div id="wrapper">
    <header>
        <h1>完了画面</h1>
    </header>
    <div id="contents">
        <main>
            <p>登録が完了しました。</p>
            <p><a href="index.php">TOP</a></p>
        </main>
    </div>
    <footer>
    </footer>
</div>
</body>
