<?php
class Note
{
    private $_name;
    private $_duration;

    function __construct($name, $duration)
    {
        $this->_name = $name;
        $this->_duration = $duration;
    }

    //Getters

    public function getName()
    {
        return $this->_name;
    }

    public function getDuration()
    {
        return $this->_duration;
    }

    //Setters

    public function setName($name)
    {
        $this->_name = $name;
    }

    public function setDuration($duration)
    {
        $this->_duration = $duration;
    }
}