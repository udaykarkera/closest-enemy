<?php

Class ShootEnemies extends Game {

    public function exitGame() {
        $this->endGame();
    }

    protected function startGame() {
        General::printLines(["Welcome to 'Game of Shooting Enemies'"]);

        for ($i=0; $i<2 ; ++$i) {
            $line = General::takeInput();
            $input = trim($line);
            if ($input == 'exit') {
                $this->endGame();
            }
            else {
                switch ($i) {
                    case 0:
                        $$input = new Enemy();
                        $$input->name = $input;
                        $name = $input;
                        break;
                    case 1:
                        $$name->dist = $input;
                        break;
                }
            }
        }

        
    }

    protected function endGame() {
        General::printLines(['You have stopped the game. Goodbye!']);
        exit;
    }

}