<?php

/**
 * classe définissant les personnages.
 */
class character {

    protected $health = 0;
    private $mana = 0;

    /**
     * constructeur de la classe
     */
    function __construct() {
        ;
    }

    /**
     * destructeur de la classe
     */
    function __destruct() {
        ;
    }

    /**
     * méthode qui permet de discuter
     * @param string $charac
     * @return string
     */
    private function chat($charac = '') {
        return $charac;
    }
   
    public function getMana() {
        return $this->mana;
    }

    public function setMana($manaValue) {
        $this->mana = $manaValue;
        
    }

}
