<?php

class Character {
    private $_alive = true;
    private $_HP; // Points de vie
    private $_MP; // Points de magie
    private $_STR; // Force
    private $_STA; // Endurance
    private $_name; // Nom
    
    public function __construct() {
        $this->_HP = 100; // Points de vie
        $this->_MP = 100; // Points de magie
        $this->_STR = 10; // Force
        $this->_STA = 10; // Endurance
        $this->_name = "Plouc";
    }

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
        return $this->_STA;
    }

    public function alive() {
        return $this->_alive;
    }

    public function hit($force) {
        $stamina = $this->_STA;
        echo "Coup de force ".$force." au joueur qui a ".$stamina." STA.\n<br>";
        $damage = $force / $stamina;
        $this->_HP -= $damage;
        echo $this->_name." reçoit ".$damage." dégats. Il lui reste ".$this->_HP." HP.\n<br>";
        if($this->_HP < 0) {
            $this->_alive = false;
            echo $this->_name." est mort !\n<br>";
        return $damage;
        }
    }

}

class Warrior extends Character {
    function __construct() {        
        $this->_HP = 150; // Points de vie
        $this->_MP = 0; // Points de magie
        $this->_STR = 20; // Force
        $this->_STA = 15; // Endurance
        $this->_name = "Warrior"; // Nom
        echo $this->_name." entre en jeu !<br>\nHP : $this->_HP<br>\nSTA : $this->_STA<br>\n";
    }

    public function hit($force) {
        $stamina = $this->_STA;
        echo "Coup de force ".$force." au joueur qui a ".$stamina." STA.\n<br>";
        $damage = $force / $stamina;
        $this->_HP -= $damage;
        echo $this->_name." reçoit ".$damage." dégats. Il lui reste ".$this->_HP." HP.\n<br>";
        if($this->_HP < 0) {
            $this->_alive = false;
            echo $this->_name." est mort !\n<br>";
        return $damage;
        }
    }

}

class Thief extends Character {
    function __construct() {        
        $this->_HP = 75; // Points de vie
        $this->_MP = 50; // Points de magie
        $this->_STR = 7; // Force
        $this->_STA = 10; // Endurance
        $this->_name = "Thief"; // Nom
        echo $this->_name." entre en jeu !<br>\nHP : $this->_HP<br>\nSTA : $this->_STA<br>\n";
    }

    public function hit($force) {
        $stamina = $this->_STA;
        echo "Coup de force ".$force." au joueur qui a ".$stamina." STA.\n<br>";
        $damage = $force / $stamina;
        $this->_HP -= $damage;
        echo $this->_name." reçoit ".$damage." dégats. Il lui reste ".$this->_HP." HP.\n<br>";
        if($this->_HP < 0) {
            $this->_alive = false;
            echo $this->_name." est mort !\n<br>";
        return $damage;
        }
    }

}

class Warlock extends Character {
    function __construct() {        
        $this->_HP = 50; // Points de vie
        $this->_MP = 150; // Points de magie
        $this->_STR = 3; // Force
        $this->_STA = 5; // Endurance
        $this->_name = "Warlock"; // Nom
        echo $this->_name." entre en jeu !<br>\nHP : $this->_HP<br>\nSTA : $this->_STA<br>\n";
    }

    public function hit($force) {
        $stamina = $this->_STA;
        echo "Coup de force ".$force." au joueur qui a ".$stamina." STA.\n<br>";
        $damage = $force / $stamina;
        $this->_HP -= $damage;
        echo $this->_name." reçoit ".$damage." dégats. Il lui reste ".$this->_HP." HP.\n<br>";
        if($this->_HP < 0) {
            $this->_alive = false;
            echo $this->_name." est mort !\n<br>";
        return $damage;
        }
    }

}








?>