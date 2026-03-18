<?php

namespace BrainGames\Games\Calc;

use function BrainGames\GameEngine\engineGameLaunch as start;

use const BrainGames\GameEngine\QUESTIONS_COUNT;

const MIN_RAND = 1;
const MAX_RAND = 50;
const OPERATION_ADD = '+';
const OPERATION_SUB = '-';
const OPERATION_MUL = '*';
const GAME_DESCRIPTION = "What is the result of the expression?";

function runGameBrainCalc(): void
{
    $operations = [OPERATION_ADD, OPERATION_SUB, OPERATION_MUL];
    $gameData = [];

    for ($i = 0; $i < QUESTIONS_COUNT; $i++) {
        $numberRandFirst = random_int(MIN_RAND, MAX_RAND);
        $numberRandSecond = random_int(MIN_RAND, MAX_RAND);

        $operation = $operations[rand(0, count($operations) - 1)];

        $result = match ($operation) {
            OPERATION_MUL => $numberRandFirst * $numberRandSecond,
            OPERATION_ADD => $numberRandFirst + $numberRandSecond,
            OPERATION_SUB => $numberRandFirst - $numberRandSecond,
        };

        $question = "{$numberRandFirst} {$operation} {$numberRandSecond}";
        $gameData[] = [$question, $result];
    }
    start($gameData, GAME_DESCRIPTION);
}
