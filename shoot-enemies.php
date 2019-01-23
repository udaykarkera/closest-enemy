<?php

spl_autoload_register('myAutoloader');
function myAutoloader($className)
{
    require_once $className.'.php';
}

General::printLines([
    "Enter to play and type 'exit' to leave: "
]);

$line = General::takeInput();
$gameObj = new ShootEnemies;
if(trim($line) != 'exit'){
    General::printLines(['Game Starts']);
    $gameObj->noOfPlyrs = 1;
    General::printLines(['Number of Players: ' . $gameObj->noOfPlyrs]);

    // start game
    $gameObj->startGame();

}
else {
    $gameObj->exitGame();
}