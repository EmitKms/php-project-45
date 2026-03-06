<?php

namespace BrainGames\Games\Calc;

use function BrainGames\GameEngine\engineGameLaunch as start;

use const BrainGames\GameEngine\QUESTIONS_COUNT;

const MIN_RAND = 1;
const MAX_RAND = 50;
const ARRAY_OPERATION_SELECTION = 2;

function runGameBrainCalc()
{
    $gameDescription = "What is the result of the expression?";
    $gameData = [];
    for ($i = 0; $i < QUESTIONS_COUNT; $i++) {
        $numberRandFirst = random_int(MIN_RAND, MAX_RAND);
        $numberRandSecond = random_int(MIN_RAND, MAX_RAND);
        $operations = ['*', '+', '-'];
        $operation = $operations[random_int(0, ARRAY_OPERATION_SELECTION)];
        $result = match ($operation) {
            '*' => $numberRandFirst * $numberRandSecond,
            '+' => $numberRandFirst + $numberRandSecond,
            '-' => $numberRandFirst - $numberRandSecond,
        };
        $question = "{$numberRandFirst} {$operation} {$numberRandSecond}";
        $gameData[] = [$question, $result];
    }
    start($gameData, $gameDescription);
}
