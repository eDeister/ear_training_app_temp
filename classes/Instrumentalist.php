<?php

/**
 *
 * A player (user) who also plays an instrument
 *
 * Extends the player class, stores extra info about the user through a private member (instrument)
 * and has all the appropriate constructors/getters/setters. PHPDocs have been omitted for inner methods
 * given their self-explanatory nature.
 *
 * @author Ethan Deister
 */
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