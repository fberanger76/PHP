<?php 

class Hero extends Character {
    private $weapon;
    private $weaponDamage;
    private $shield;
    private $shieldValue;

        /**
     * Get the value of weapon
     * @return string
     */
    public function getWeapon() {
        return $this->weapon;
    }

    /**
     * Set the value of weapon
     * @param string
     * @return  self
     */ 
    public function setWeapon(string $weapon): self {
        $this->weapon = $weapon;
    }

        /**
     * Get the value of weaponDamage
     * @return int
     */
    public function getWeaponDamage() {
        return $this->weaponDamage;
    }

    /**
     * Set the value of weaponDamage
     * @param int
     * @return  self
     */ 
    public function setWeaponDamage(int $weaponDamage): self {
        $this->weaponDamage = $weaponDamage;
    }

        /**
     * Get the value of shield
     * @return string
     */
    public function getShield() {
        return $this->shield;
    }

    /**
     * Set the value of shield
     * @param string
     * @return  self
     */ 
    public function setShield(string $shield): self {
        $this->shield = $shield;
    }

        /**
     * Get the value of shieldValue
     * @return integer
     */
    public function getShieldValue() {
        return $this->shieldValue;
    }

    /**
     * Set the value of shieldValue
     * @param int
     * @return  self
     */ 
    public function setShieldValue(int $shieldValue): self {
        $this->shieldValue = $shieldValue;
    }

        /**
     * construct magic method of the Hero class while lunching its parent's magic method
     */
    public function __construct($health, $rage, $weapon, $weaponDamage, $shield, $shieldValue) {
        parent::__construct($health, $rage);
        $this->weapon = $weapon;
        $this->weaponDamage = $weaponDamage;
        $this->shield = $shield;
        $this->shieldValue = $shieldValue;
    }

    public function attacked($damage) {
        if($this->shieldValue < $damage){
            $this->setHealth($this->getHealth() - ($damage - $this->shieldValue));
        } 
        $this->increasedRage();
        return $this->getHealth();
        

    }

    public function increasedRage() {
        $this->setRage($this->getRage() + 30);
        return $this->getRage();
    }


}
