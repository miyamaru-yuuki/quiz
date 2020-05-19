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
            <form method="POST" action="kakunin.php">
                <p>名前:<input type="text" name="name"></p>
                <input type="hidden" name="count" value="10">
                <p><input type="submit" value="登録"></p>
            </form>
        </main>
    </div>
    <footer>
    </footer>
</div>
</body>
