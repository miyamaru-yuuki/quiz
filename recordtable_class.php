<?php
require_once ('record_class.php');

class recordTable
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function get_record()
    {
        $sql = $this->db->prepare("SELECT * FROM record ORDER BY name ASC");
        $sql->execute();
        $all = $sql->fetchAll();
        $ret = array();

        foreach($all as $data){
            $record = new record($data['rid'],$data['name'],$data['correctPoints']);
            $ret[] = $record;
        }

        return $ret;
    }

    public function add($name,$correctPoints)
    {
        $sql = $this->db->prepare("INSERT INTO record (name,correctPoints) VALUES(?,?)");
        $sql->bindValue(1, $name);
        $sql->bindValue(2, $correctPoints);
        $sql->execute();
    }
}