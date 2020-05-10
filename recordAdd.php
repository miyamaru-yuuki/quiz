<?php
require_once ('function.php');
require_once ('quiztable_class.php');
$quizTable = new quizTable(db());
$quizs = $quizTable->get_quiz();
$quizNumber = 1;
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
            <form>
                <?php
                foreach($quizs as $quiz){
                    ?>
                    <p>クイズ<?php echo $quizNumber; ?></p>
                    <p><?php echo $quiz->getQuestion(); ?></p>
                    <input type="radio" name="answer<?php echo $quizNumber; ?>" value="1"><?php echo $quiz->getAnswer1(); ?>
                    <input type="radio" name="answer<?php echo $quizNumber; ?>" value="2"><?php echo $quiz->getAnswer2(); ?>
                    <input type="radio" name="answer<?php echo $quizNumber; ?>" value="3"><?php echo $quiz->getAnswer3(); ?>
                    <input type="radio" name="answer<?php echo $quizNumber; ?>" value="4"><?php echo $quiz->getAnswer4(); ?>
                    <?php
                    $quizNumber = $quizNumber + 1;
                }
                ?>
                <p><input type="submit" value="解答を登録する"></p>
            </form>
            <p><a href="index.php">TOP</a></p>
        </main>
    </div>
    <footer>
    </footer>
</div>
</body>
