<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=yes">
    <title>クイズ</title>
    <style>
    </style>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<div id="wrapper">
    <header>
        <h1>クイズ3</h1>
    </header>
    <div id="contents">
        <main>
            <table>
                <tr><th><a href="index.php?sortColumn=tname&sortOrder=<?php echo $sortOrder; ?>">Todoの内容</a></th><th><a href="index.php?sortColumn=status&sortOrder=<?php echo $sortOrder; ?>">進捗</a></th><th><a href="index.php?sortColumn=priority&sortOrder=<?php echo $sortOrder; ?>">優先順位</a></th><th><a href="index.php?sortColumn=registrationtime&sortOrder=<?php echo $sortOrder; ?>">登録時間</a></th><th>削除</th></tr>
                <?php
                foreach($todos as $todo){
                    ?>
                    <tr><td><a href="update.php?tid=<?php echo $todo->getTid(); ?>"><?php echo h($todo->getTname()); ?></a></td><td><?php echo h($todo->getStatusDisplay()); ?></td><td><?php echo h($todo->getPriorityDisplay()); ?></td><td><?php echo $todo->getRegistrationTime(); ?></td><td><a href="deleteKakunin.php?tid=<?php echo $todo->getTid(); ?>">削除</a></td></tr>
                    <?php
                }
                ?>
            </table>
            <p>Todoを追加する</p>
            <form method="POST" action="add.php">
                <p>Todoの内容 <input type="text" name="tname"></p>
                <p>優先順位
                    <select name="priority">
                        <?php
                        getSelectBox($env['priority'],$priority);
                        ?>
                    </select>
                </p>
                <p><input type="submit" value="追加"></p>
            </form>
            <p>Todoの内容検索</p>
            <form method="GET" action="index.php">
                <p>Todoの内容 <input type="text" name="tname"></p>
                <p><input type="submit" value="検索"></p>
            </form>
        </main>
    </div>
    <footer>
    </footer>
</div>
</body>
