<?php
class quiz
{
    // プロパティの宣言
    private $qid;
    private $question;
    private $answer1;
    private $answer2;
    private $answer3;
    private $answer4;
    private $correctAnswer;

    public function __construct($qid,$question,$answer1,$answer2,$answer3,$answer4,$correctAnswer)
    {
        $this->qid = $qid;
        $this->question = $question;
        $this->answer1 = $answer1;
        $this->answer2 = $answer2;
        $this->answer3 = $answer3;
        $this->answer4 = $answer4;
        $this->correctAnswer = $correctAnswer;
    }

    public function getQid()
    {
        return $this->qid;
    }

    public function getQuestion()
    {
        return $this->question;
    }

    public function getAnswer1()
    {
        return $this->answer1;
    }

    public function getAnswer2()
    {
        return $this->answer2;
    }

    public function getAnswer3()
    {
        return $this->answer3;
    }

    public function getAnswer4()
    {
        return $this->answer4;
    }

    public function getCorrectAnswer()
    {
        return $this->correctAnswer;
    }
}
