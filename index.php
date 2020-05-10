<?php
require_once ('function.php');
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
        <h1>クイズ</h1>
    </header>
    <div id="contents">
        <main>
            <p><a href="quiz.php">クイズを始める</a></p>
            <p><a href="recordDisplay.php">記録を見る</a></p>
        </main>
    </div>
    <footer>
    </footer>
</div>
</body>
