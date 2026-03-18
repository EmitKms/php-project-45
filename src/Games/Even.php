<?php

namespace BrainGames\Games\Even;

use function BrainGames\GameEngine\engineGameLaunch as start;

use const BrainGames\GameEngine\QUESTIONS_COUNT;

const MIN_RAND = 1;
const MAX_RAND = 99;
const GAME_DESCRIPTION = 'Answer "yes" if the number is even, otherwise answer "no".';


function isEven(int $number): bool
{
    return $number % 2 === 0;
}

function runGameBrainEven(): void
{
    $gameData = [];
    for ($i = 0; $i < QUESTIONS_COUNT; $i++) {
        $questionGame = random_int(MIN_RAND, MAX_RAND);
        $correctAnswer = isEven($questionGame) ? 'yes' : 'no';
        $gameData[] = [$questionGame, $correctAnswer];
    }
    start($gameData, GAME_DESCRIPTION);
}
