<?php
require_once ('function.php');
require_once ('recordtable_class.php');

if(!isset($_POST['name'],$_POST['count'])){
    header("Location: http://mmr.e5.valueserver.jp/quiz/recordAdd.php?error=1");
    exit();
}
$name = $_POST['name'];
$count = $_POST['count'];

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
    <link rel="stylesheet" type="text/css" href="<?php echo css(); ?>?ver=3">
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
