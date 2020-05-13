<?php
require_once ('quiz_class.php');

class quizTable
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function get_quiz_all()
    {
        $sql = $this->db->prepare("SELECT * FROM quiz LIMIT 5");
        $sql->execute();
        $all = $sql->fetchAll();
        $ret = array();

        foreach ($all as $data) {
            $quiz = new quiz($data['qid'], $data['question'], $data['answer1'], $data['answer2'], $data['answer3'], $data['answer4'], $data['correctAnswer']);
            $ret[] = $quiz;
        }

        return $ret;
    }

    public function get_quiz($qid)
    {
        $sql = $this->db->prepare("SELECT * FROM quiz WHERE qid=?");
        $sql->bindValue(1, $qid);
        $sql->execute();
        $data = $sql->fetch();
        $quiz = new quiz($data['qid'], $data['question'], $data['answer1'], $data['answer2'], $data['answer3'], $data['answer4'], $data['correctAnswer']);

        return $quiz;
    }
}