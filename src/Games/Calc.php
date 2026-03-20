<?php

namespace BrainGames\Games\Calc;

use function BrainGames\GameEngine\engineGameLaunch as start;
use function Config\Gamedescription\gameDesc;

const MIN_RAND = 1;
const MAX_RAND = 50;
const OPERATION_ADD = '+';
const OPERATION_SUB = '-';
const OPERATION_MUL = '*';

function runGameBrainCalc(): void
{
    $generateRound = function (): array {
        $operations = [OPERATION_ADD, OPERATION_SUB, OPERATION_MUL];
        $numberRandFirst = random_int(MIN_RAND, MAX_RAND);
        $numberRandSecond = random_int(MIN_RAND, MAX_RAND);
        $operation = $operations[random_int(0, count($operations) - 1)];

        $result = match ($operation) {
            OPERATION_MUL => $numberRandFirst * $numberRandSecond,
            OPERATION_ADD => $numberRandFirst + $numberRandSecond,
            OPERATION_SUB => $numberRandFirst - $numberRandSecond,
        };

        $question = "{$numberRandFirst} {$operation} {$numberRandSecond}";

        return [$question, $result];
    };
    start($generateRound, gameDesc('brain-calc'));
}
