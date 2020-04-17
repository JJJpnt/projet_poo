<?php

abstract class Character {
    protected $_alive = true;
    protected $_HP; // Points de vie
    protected $_MP; // Points de magie
    protected $_STR; // Force
    protected $_STA; // Endurance Physique
    protected $_SPR; // Esprit : Resitance Magique
    protected $_name; // Nom
    
    public function __construct($hp, $mp, $str, $sta, $spr, $name) {
        $this->_HP = $hp; // Points de vie
        $this->_MP = $mp; // Points de magie
        $this->_STR = $str; // Force
        $this->_STA = $sta; // Endurance
        $this->_name = $name;
        echo $this->_name." entre en jeu !<br>\nHP : $this->_HP<br>\nSTA : $this->_STA<br>\n";
    }

    public function getName() {
        return $this->_name;
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
        $this->_HP -= $damage * 10;
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
        parent::__construct(150,0,20,15,"Warrior");
    }
    
    // public function hit($force) {
        //     $stamina = $this->_STA;
        //     echo "Coup de force ".$force." au joueur qui a ".$stamina." STA.\n<br>";
        //     $damage = $force / $stamina;
        //     $this->_HP -= $damage;
        //     echo $this->_name." reçoit ".$damage." dégats. Il lui reste ".$this->_HP." HP.\n<br>";
        //     if($this->_HP < 0) {
            //         $this->_alive = false;
            //         echo $this->_name." est mort !\n<br>";
            //     return $damage;
            //     }
            // }
            
        }
        
class Thief extends Character {
    function __construct() {        
        parent::__construct(75,50,7,10,"Thief");
        echo $this->_name." entre en jeu !<br>\nHP : $this->_HP<br>\nSTA : $this->_STA<br>\n";
    }

    // public function hit($force) {
    //     $stamina = $this->_STA;
    //     echo "Coup de force ".$force." au joueur qui a ".$stamina." STA.\n<br>";
    //     $damage = $force / $stamina;
    //     $this->_HP -= $damage;
    //     echo $this->_name." reçoit ".$damage." dégats. Il lui reste ".$this->_HP." HP.\n<br>";
    //     if($this->_HP < 0) {
    //         $this->_alive = false;
    //         echo $this->_name." est mort !\n<br>";
    //     return $damage;
    //     }
    // }

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

    // public function hit($force) {
    //     $stamina = $this->_STA;
    //     echo "Coup de force ".$force." au joueur qui a ".$stamina." STA.\n<br>";
    //     $damage = $force / $stamina;
    //     $this->_HP -= $damage;
    //     echo $this->_name." reçoit ".$damage." dégats. Il lui reste ".$this->_HP." HP.\n<br>";
    //     if($this->_HP < 0) {
    //         $this->_alive = false;
    //         echo $this->_name." est mort !\n<br>";
    //     return $damage;
    //     }
    // }

}








?>