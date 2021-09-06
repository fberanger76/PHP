<?php

class Character {
    private $health;
    private $rage;

     /**
     * Get the value of health
     * @return integer
     */
    public function getHealth() {
        return $this->health;
    }

    /**
     * Set the value of health
     * @param int
     * @return  self
     */ 
    public function setHealth(int $health): self {
        $this->health = $health;
        return $this;
    }

         /**
     * Get the value of rage
     * @return integer
     */
    public function getRage() {
        return $this->rage;
    }

        /**
     * Set the value of rage
     * @param int
     * @return  self
     */ 
    public function setRage(int $rage): self {
        $this->rage = $rage;
        return $this;
    } 

    /**
     * construct magic method of the Character class
     */
    public function __construct(int $health, int $rage) {
        $this->health = $health;
        $this->rage = $rage;
    }
}