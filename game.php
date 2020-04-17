<?php 

require_once('classes/character.php');



Class Game {



    private $_turn = 1;
    private $_max_turn = 100;
    private $_num_players;
    private $_playing = true;
    private $_players = [];
    private $_players_alive = 0;



    public function __construct($players) {
        $this->_players = $players;
        $this->_num_players = count($players);
        $this->_players_alive = $this->_num_players;
    }
    
    public function roll_dice() {
        $result = random_int(1,6);
        echo "Lancé de dé : ".$result."<br>\n";
        return $result;
    }
    
    public function end_game() {
        $this->_playing = false;
        echo "\n<br>\n<br>----------------------------------------";
        echo "\n<br>Jeu terminé !";
        echo "\n<br>Tour final ! : ".$this->_turn."<br>\n";
        foreach($this->_players as $player) {
            echo "\n<br>".$player->getName()." : HP : ".$player->getHP();
        }
    }
    
    public function play() {
        
        echo "<br>\nLa partie commence !<br>\n";
        
        while($this->_playing) {
            $idx = 0;
            echo "\n<br> Tour ".$this->_turn." :\n<br>";

            foreach($this->_players as $player) {
                if($player->alive()) {
                    $player->hit($this->roll_dice());
                } else {
                }
            }
            
            $players_alive = $this->_num_players;
            foreach($this->_players as $player) {
                if(!$player->alive()) {
                    $players_alive--;
                }
            }
            $this->_players_alive = $players_alive;
            if($players_alive <= 1) $this->end_game();
            if($this->_turn >= $this->_max_turn) $this->end_game();
            $this->_turn++;
            
        }
    }

}

$joueurs = array(new Warrior(), new Thief(), new Warlock());
$partie = new Game($joueurs);
$partie->play();