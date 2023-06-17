<?php

class Instrumentalist extends Player
{
    private $_instrument;

    public function __construct($name, $score, $date, $instrument)
    {
        parent::__construct($name, $score, $date);
        $this->_instrument = $instrument;
    }

    //Getter

    public function getInstrument()
    {
        return $this->_instrument;
    }

    //Setter

    public function setInstrument($instrument)
    {
        $this->_instrument = $instrument;
    }
}