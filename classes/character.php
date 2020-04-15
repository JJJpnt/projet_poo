<?php

class Character {
    private $_alive = true;
    private $_HP = 100; // Points de vie
    private $_MP = 100; // Points de magie
    private $_STR = 10; // Force
    private $_STA = 10; // Endurance

    public function getHP() {
        return $this->_HP;
    }

    public function getMP() {
        return $this->_MP;
    }

    public function getSTR() {
        return $this->_HP;
    }

    public function getSTA() {
        return $this->_MP;
    }

    public function alive() {
        return $this->alive;
    }

    public function hit($force) {
        $damage = $force/$this->_STA;
        $this->$_HP -= $damage
        if($this->$_HP < 0) $this->$_alive = false;
        return $damage;
    }

}

class Warrior extends Character {
    private $_HP = 150; // Points de vie
    private $_MP = 0; // Points de magie
    private $_STR = 20; // Force
    private $_STA = 15; // Endurance
}

class Thief extends Character {
    private $_HP = 75; // Points de vie
    private $_MP = 50; // Points de magie
    private $_STR = 7; // Force
    private $_STA = 10; // Endurance
}

class Warlock extends Character {
    private $_HP = 50; // Points de vie
    private $_MP = 150; // Points de magie
    private $_STR = 3; // Force
    private $_STA = 5; // Endurance
}








?>