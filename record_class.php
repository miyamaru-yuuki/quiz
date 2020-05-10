<?php
class record
{
    // プロパティの宣言
    private $rid;
    private $name;
    private $correctPoints;

    public function __construct($rid,$name,$correctPoints)
    {
        $this->rid = $rid;
        $this->name = $name;
        $this->correctPoints = $correctPoints;
    }

    public function getRid()
    {
        return $this->rid;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getCorrectPoints()
    {
        return $this->correctPoints;
    }
}
