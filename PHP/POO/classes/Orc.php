<?php 

class Orc extends Character {
    private $damage;

            /**
     * Get the value of damage
     * @return int
     */
    public function getDamage() {
        return $this->damage;
    }

    /**
     * Set the value of damage
     * @param int
     * @return  self
     */ 
    public function setDamage(int $damage): self {
        $this->damage = $damage;
        return $this;
    }

           /**
     * construct magic method of the Orc class while lunching its parent's magic method
     */
    public function __construct($health, $rage, $damage) {
        parent::__construct($health, $rage);
        $this->damage = $damage;
    }

    public function attack() {
        $this->damage = rand(600, 800);
        return $this->damage;
    }

    public function attacked($damage){
        $this->setHealth($this->getHealth() - $damage);
    }
}
