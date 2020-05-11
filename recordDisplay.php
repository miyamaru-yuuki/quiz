<?php
require_once ('function.php');
require_once ('recordtable_class.php');

$recordTable = new recordTable(db());
$records = $recordTable->get_record();
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
        <h1>記録</h1>
    </header>
    <div id="contents">
        <main>
            <table>
                <tr><th>名前</th><th>正解数</th></tr>
                <?php
                foreach($records as $record){
                    ?>
                    <tr><td><?php echo $record->getName(); ?></td><td><?php echo $record->getCorrectPoints(); ?></td></tr>
                    <?php
                }
                ?>
            </table>
            <p><a href="index.php">TOP</a></p>
        </main>
    </div>
    <footer>
    </footer>
</div>
</body>
