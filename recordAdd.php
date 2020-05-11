<?php
require_once ('function.php');
require_once ('quiztable_class.php');
if(isset($_POST['qid1'],$_POST['qid2'],$_POST['qid3'],$_POST['qid4'],$_POST['qid5'],$_POST['answer1'],$_POST['answer2'],$_POST['answer3'],$_POST['answer4'],$_POST['answer5'])){
    $qid1 = $_POST['qid1'];
    $qid2 = $_POST['qid2'];
    $qid3 = $_POST['qid3'];
    $qid4 = $_POST['qid4'];
    $qid5 = $_POST['qid5'];
    $answer1 = $_POST['answer1'];
    $answer2 = $_POST['answer2'];
    $answer3 = $_POST['answer3'];
    $answer4 = $_POST['answer4'];
    $answer5 = $_POST['answer5'];

    var_dump($qid1);

    $answer = array($qid1=>$answer1);
    $answer = array_merge($answer,array($qid2=>$answer2));
    $answer = array_merge($answer,array($qid3=>$answer3));
    $answer = array_merge($answer,array($qid4=>$answer4));
    $answer = array_merge($answer,array($qid5=>$answer5));

    var_dump($answer);

    $quizTable = new quizTable(db());
    $kekka = $quizTable->get_hantei($answer);
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
    <link rel="stylesheet" type="text/css" href="<?php echo css(); ?>">
</head>
<body>
<div id="wrapper">
    <header>
        <h1>クイズ</h1>
    </header>
    <div id="contents">
        <main>
        </main>
    </div>
    <footer>
    </footer>
</div>
</body>
