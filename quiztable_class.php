<?php
require_once ('quiz_class.php');

class quizTable
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function get_quiz()
    {
        $sql = $this->db->prepare("SELECT * FROM quiz LIMIT 5");
        $sql->execute();
        $all = $sql->fetchAll();
        $ret = array();

        foreach($all as $data){
            $quiz = new quiz($data['qid'],$data['question'],$data['answer1'],$data['answer2'],$data['answer3'],$data['answer4'],$data['correctAnswer']);
            $ret[] = $quiz;
        }

        return $ret;
    }

//    public function get_hantei()
//    {
//
//    }
}