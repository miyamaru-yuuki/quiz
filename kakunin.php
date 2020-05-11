<?php
require_once ('function.php');

if(!isset($_POST['name'],$_POST['count'])){
    header("Location: http://mmr.e5.valueserver.jp/quiz/recordAdd.php?error=1");
    exit();
}
$name = $_POST['name'];
$count = $_POST['count'];

$karahantei = str_replace(array(" ", "　"), "", $_POST['name']);

if(empty($karahantei)){
    header("Location: http://mmr.e5.valueserver.jp/quiz/recordAdd.php?error=2&name=$name&count=$count");
    exit();
}
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
        <h1>確認画面</h1>
    </header>
    <div id="contents">
        <main>
            <form method="POST" action="kanryou.php">
                <p>この名前で登録してよろしいですか？</p>
                <p>名前:<?php echo $name; ?></p>
                <input type="hidden" name="name" value="<?php echo $name; ?>">
                <input type="hidden" name="count" value="<?php echo $count; ?>">
                <p><input type="submit" value="OK"></p>
            </form>
        </main>
    </div>
    <footer>
    </footer>
</div>
</body>
