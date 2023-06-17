<?php

class Player
{
    private $_name, $_score, $_date;

    function __construct($name, $score, $date)
    {
        $this->_name = $name;
        $this->_score = $score;
        $this->_date = $date;
    }

    //Getters

    public function getName()
    {
        return $this->_name;
    }

    public function getScore()
    {
        return $this->_score;
    }

    public function getDate()
    {
        return $this->_date;
    }

    //Setters

    public function setName($name)
    {
        $this->_name = $name;
    }

    public function setScore($score)
    {
        $this->_score = $score;
    }

    public function setDate($date)
    {
        $this->_date = $date;
    }


}